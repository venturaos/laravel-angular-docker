<?php

namespace App\Http\Repositories\Contracts;

use App\Http\DTOs\FilterDeveloperDto;

interface DeveloperRepositoryInterface
{
    public function list(FilterDeveloperDto $filter): array;
}