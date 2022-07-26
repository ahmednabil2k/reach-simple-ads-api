<?php

namespace Modules\Ads\Repositories;

use Carbon\Carbon;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Support\Facades\Mail;
use Modules\Ads\Emails\AdsReminderEmail;
use Modules\Ads\Models\Ads;

class AdsRepository extends CrudRepository
{

    protected string $cachePrefix = 'ads_';

    public function __construct()
    {
        $this->model = new Ads();
    }

    public function getAdsByAdvertiser(int|string $id): Paginator
    {
        return $this->query()
            ->where('advertiser_id', $id)
            ->orderBy($this->orderBy, $this->orderType)
            ->simplePaginate(self::ITEMS_PER_PAGE);
    }

    public function getFilteredAds(): Paginator
    {
        $tag = trim( htmlspecialchars(request('tag')) );
        $category = trim( htmlspecialchars(request('category')) );
        $query = $this->query();

        if ($category) {
            $query = $query->where('category_id', '=', $category);
        }

        if ($tag) {
            $query = $query->where('tags', 'like', '%'.$tag.'%');
        }

        $query = $query->orderBy($this->orderBy, $this->orderType);

        return $query->simplePaginate(self::ITEMS_PER_PAGE);
    }

    public function notifyAdvertisersForAdsReminders()
    {
        $date = Carbon::now()->addDay()->toDateString();

        $this->model->with('advertiser:id,email')
            ->whereDate('start_date', '=', $date)
            ->lazy(50)
            ->each(function ($ad){
                  if ($ad->advertiser) {
                      Mail::to($ad->advertiser->email)->queue(new AdsReminderEmail($ad));
                  }
            });

    }

}
