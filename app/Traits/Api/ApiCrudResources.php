<?php

namespace App\Traits\Api;

trait ApiCrudResources
{
    protected $repository;

    protected $resource;

    public function index()
    {
        $data = $this->repository->all();
        return response()->success($this->resource::collection($data)->toResponse(request())->getData());
    }

    public function show($id)
    {
        $data = $this->repository->getById($id);
        return response()->success(new $this->resource($data));
    }

    public function destroy($id)
    {
        $status = $this->repository->destroy($id);
        if ($status) {
            return response()->success('Resource deleted successfully');
        }

        return response()->error('Something went wrong while deleting the Resource');
    }

}
