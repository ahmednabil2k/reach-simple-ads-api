<?php

namespace Modules\Ads\Http\Controllers\Api;

use Modules\Ads\Http\Controllers\Controller;
use Modules\Ads\Http\Requests\Api\Category\CategoryStoreRequest;
use Modules\Ads\Http\Requests\Api\Category\CategoryUpdateRequest;
use Modules\Ads\Repositories\CategoriesRepository;
use Modules\Ads\Transformers\Category\CategoryResource;

class CategoryController extends Controller
{

    public function __construct(CategoriesRepository $repository)
    {
        $this->repository = $repository;
        $this->resource = CategoryResource::class;
    }

    public function store(CategoryStoreRequest $request)
    {
        $category = $this->repository->store($request->validated());
        if ($category) {
            return $this->success(new $this->resource($category));
        }

        return $this->error('Something went wrong, Please try again');
    }

    public function update(CategoryUpdateRequest $request, $id)
    {
        $category = $this->repository->edit($id , $request->validated());
        if ($category) {
            return $this->success(new $this->resource($category));
        }

        return $this->error('Something went wrong, Please try again');
    }
}
