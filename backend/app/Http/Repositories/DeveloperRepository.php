<?php

namespace App\Http\Repositories;

use App\Http\DTOs\FilterDeveloperDto;
use App\Http\Eloquent\DeveloperEloquent;
use App\Http\Repositories\Contracts\DeveloperRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class DeveloperRepository implements DeveloperRepositoryInterface
{
    private Model $eloquent;

    public function __construct(DeveloperEloquent $eloquent)
    {
        $this->eloquent = $eloquent;
    }
    
    public function list(FilterDeveloperDto $filterDeveloper): array
    {
        $paginator = $filterDeveloper->getPaginator();
        $filters = array_map(fn ($filter) => !empty($filter), $filterDeveloper->toArray());

        return $this->eloquent->where($filters)
                              ->take($paginator->getLimit())
                              ->skip($paginator->getSkip())
                              ->get();
    }
}