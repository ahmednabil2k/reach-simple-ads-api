<?php

namespace Modules\Ads\Repositories;

use Modules\Ads\Models\Ads;

class TagsRepository extends CrudRepository
{
    protected string $cachePrefix = 'tags_';

    public function __construct()
    {
        $this->model = new Ads();
    }

}
