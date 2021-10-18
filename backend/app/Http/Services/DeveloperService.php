<?php

namespace App\Http\Services;

use App\Http\DTOs\FilterDeveloperDto;
use App\Http\Repositories\Contracts\DeveloperRepositoryInterface;
use App\Http\Services\Contracts\DeveloperServiceInterface;

class DeveloperService implements DeveloperServiceInterface
{
    private DeveloperRepositoryInterface $developerReposity;

    public function __construct(DeveloperRepositoryInterface $developerReposity)
    {
        $this->developerReposity = $developerReposity;
    }

    public function list(FilterDeveloperDto $filter): array
    {
        return $this->developerReposity->list($filter);
    }
}