<?php

namespace Modules\Ads\Repositories;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class CrudRepository
{
    protected const ITEMS_PER_PAGE = 10;

    protected $model;

    protected string $cachePrefix = '';

    protected string $orderBy = 'id';

    protected string $orderType = 'desc';

    public function query(): Builder
    {
        return $this->model->newQuery();
    }

    public function getById($id, array $columns = ['*'], array $relations = []): Model|Collection|Builder|array|null
    {
        $query = $this->query();

        if ( $relations ) {
            $query = $query->with($relations);
        }

        return $query->findOrFail($id, $columns);
    }

    public function all(array $columns = ['*'], array $relations = []): Paginator
    {
        $query = $this->query();

        if ( $relations ) {
            $query = $query->with($relations);
        }

        $query = $query->orderBy($this->orderBy, $this->orderType);

        return $query->simplePaginate(self::ITEMS_PER_PAGE, $columns);
    }

    public function store(array $data) :Model|Collection|Builder|array|null
    {
        return $this->model->create($data);
    }

    public function edit(int|string $id , array $data): Model|Collection|Builder|array|null
    {
        $record = $this->getById($id);
        if ($record) {
            $record->update($data);
        }
        return $record;
    }

    public function destroy(int|string $id) :bool
    {
        $record = $this->getById($id);
        return $record ? $record->delete() : false;
    }
}
