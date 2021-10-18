<?php

namespace App\Http\DTOs;

class Paginator
{
    private int $page;
    private int $limit;

    private function __construct(int $page, int $limit)
    {
        $this->page = $page;
        $this->limit = $limit;
    }

    public static function create(array $data): self
    {
        return new self(
            $data['page'] ?? 1,
            $data['limit'] ?? 10
        );
    }

    public function getPage(): int
    {
        return $this->page;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getSkip(): int
    {
        return ($this->page - 1) * $this->limit;
    }
}