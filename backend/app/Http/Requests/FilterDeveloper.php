<?php

namespace App\Http\Requests;

use App\Http\DTOs\FilterDeveloperDto;
use Carbon\CarbonInterface;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class FilterDeveloper extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'nullable|string',
            'age' => 'nullable|integer',
            'gender' => ['nullable', Rule::in(['feminino', 'masculino', 'outro'])],
            'hobby' => 'nullable|string',
            'birth_date' => 'nullable|date'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Nome',
            'age' => 'Idade',
            'gender' => 'Sexo',
            'hobby' => 'Hobby',
            'birth_date' => 'Data de Nascimento'
        ];
    }

    public function messages()
    {
        return [
            'string' => 'Campo :attribute está no formato inválido',
            'integer' => 'Campo :atribute precisa ser numérico',
            'in' => 'Campo :attribute com valor inválido',
            'date' => 'Campo :attribute precisa ser do tipo data'
        ];
    }

    public function handle(): array
    {
        $data = $this->validated();

        if (! empty($data['birth_date']))  $data['birth_date'] = CarbonInterface::parse($data['birth_date']);

        return $data;
    }

    public function getData(): FilterDeveloperDto
    {
        return FilterDeveloperDto::criar($this->handle());
    }
}
