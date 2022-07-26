<?php

namespace Modules\Ads\Transformers\Ads;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;
use Modules\Ads\Transformers\Category\CategoryResource;

class AdsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'            => $this->id,
            'title'         => $this->title,
            'description'   => $this->description,
            'type'          => $this->type,
            'start_date'    => Carbon::parse($this->start_date)->toDayDateTimeString(),
            'advertiser_id' => $this->advertiser_id,
            'category'      => $this->whenLoaded('category', new CategoryResource($this->category)),
            'tags'          => $this->tags,
        ];
    }
}
