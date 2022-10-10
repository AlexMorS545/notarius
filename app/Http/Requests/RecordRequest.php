<?php

namespace App\Http\Requests;

use App\Models\Record;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RecordRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'firstname' => 'required|min:3',
            'lastname' => 'required|min:3',
            'email' => 'required|email',
            'recorded_at' => 'required',
            'type' => ['required', Rule::in(array_keys(Record::$types))],
        ];
    }

    public function messages()
    {
        return [
            'firstname.required' => 'Поле "Имя" обязательно',
            'lastname.required' => 'Поле "Фамилия" обязательно',
            'email.required' => 'Поле "E-mail" обязательно',
            'recorded_at.required' => 'Выберите "Дату записи"',
            'type.required' => 'Выберите "Тип обращения"',
            'firstname.min' => 'Минимальная длина 3 символа',
            'lastname.min' => 'Минимальная длина 3 символа',
            'email.email' => 'Поле "E-mail" не соответствует',
        ];
    }
}
