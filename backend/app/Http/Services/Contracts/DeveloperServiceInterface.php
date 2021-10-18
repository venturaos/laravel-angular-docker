<?php

namespace App\Http\Services\Contracts;

use App\Http\DTOs\FilterDeveloperDto;

interface DeveloperServiceInterface
{
    public function list(FilterDeveloperDto $filter): array;
}