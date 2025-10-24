<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $id=$this->route('cliente') ? $this->route('cliente')->id : null;
        return [
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:clientes,email,',
            'telefono' => 'nullable|string|max:20',
            'activo' => 'boolean',
        ];
    }
}
