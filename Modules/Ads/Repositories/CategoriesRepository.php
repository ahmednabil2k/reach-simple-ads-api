<?php

namespace Modules\Ads\Repositories;

use Modules\Ads\Models\Category;

class CategoriesRepository extends CrudRepository
{

    protected string $cachePrefix = 'category_';

    public function __construct()
    {
        $this->model = new Category();
    }

}
