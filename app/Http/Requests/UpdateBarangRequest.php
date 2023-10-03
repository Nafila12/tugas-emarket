<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBarangRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nama_barang' => 'required|string',
            'kode_barang' => 'required|string',
            'satuan' => 'required|string',
            'harga_jual' => 'required|numeric',
            'stok' => 'required|integer',
            'ditarik' => 'required|boolean',   
        ];
    }
}