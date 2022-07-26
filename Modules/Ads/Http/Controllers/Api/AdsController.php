<?php

namespace Modules\Ads\Http\Controllers\Api;

use Modules\Ads\Http\Controllers\Controller;
use Modules\Ads\Http\Requests\Api\Ads\AdsRequest;
use Modules\Ads\Repositories\AdsRepository;
use Modules\Ads\Transformers\Ads\AdsResource;

class AdsController extends Controller
{

    public function __construct(AdsRepository $repository)
    {
        $this->repository = $repository;
        $this->resource = AdsResource::class;
    }

    public function store(AdsRequest $request)
    {
        $ad = $this->repository->store($request->validated());
        if ($ad) {
            return $this->success(new $this->resource($ad));
        }

        return $this->error('Something went wrong, Please try again');
    }

    public function update(AdsRequest $request, $id)
    {
        $ad = $this->repository->edit($id , $request->validated());
        if ($ad) {
            return $this->success(new $this->resource($ad));
        }

        return $this->error('Something went wrong, Please try again');
    }

    public function getAdvertiserAds(int|string $id)
    {
        $ads = $this->repository->getAdsByAdvertiser($id);
        return $this->success($this->resource::collection($ads)->toResponse(request())->getData());
    }

    public function getFilteredAds()
    {
        $ads = $this->repository->getFilteredAds();
        return $this->success($this->resource::collection($ads)->toResponse(request())->getData());
    }
}
