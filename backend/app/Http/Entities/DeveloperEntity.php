<?php

namespace App\Http\Entities;

use Carbon\CarbonInterface;

class DeveloperEntity
{
    private string $name;
    private int $age;
    private string $gender;
    private string $hobby;
    private CarbonInterface $birthDate;

    public function __construct(
        string $name,
        int $age,
        string $gender,
        string $hobby,
        CarbonInterface $birthDate
    ) {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
        $this->hobby = $hobby;
        $this->birthDate = $birthDate;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function getGender(): string
    {
        return $this->gender;
    }

    public function getHobby(): string
    {
        return $this->hobby;
    }

    public function getBirthDate(): CarbonInterface
    {
        return $this->birthDate;
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