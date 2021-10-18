<?php

namespace App\Http\DTOs;

use Carbon\CarbonInterface;

class FilterDeveloperDto
{
    private ?string $name;
    private ?int $age;
    private ?string $gender;
    private ?string $hobby;
    private ?CarbonInterface $birthDate;
    private Paginator $paginator;

    private function __construct(
        ?string $name,
        ?int $age,
        ?string $gender,
        ?string $hobby,
        ?CarbonInterface $birthDate,
        Paginator $paginator
    ) {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
        $this->hobby = $hobby;
        $this->birthDate = $birthDate;
        $this->paginator = $paginator;
    }

    public static function criar(array $data): self
    {
        return new self(
            $data['name'] ?? null,
            $data['age'] ?? null,
            $data['gender'] ?? null,
            $data['hobby'] ?? null,
            $data['birth_date'] ?? null,
            Paginator::create($data)
        );
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function getHobby(): ?string
    {
        return $this->hobby;
    }

    public function getBirthDate(): ?CarbonInterface
    {
        return $this->birthDate;
    }

    public function getPaginator(): Paginator
    {
        return $this->paginator;
    }

    public function toArray(): array
    {
        return [
            'nome' => $this->name,
            'idade' => $this->age,
            'sexo' => $this->gender,
            'hobby' => $this->hobby,
            'data_nascimento' => $this->birthDate
        ];
    }
}