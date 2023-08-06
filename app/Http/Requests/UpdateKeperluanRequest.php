<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateKeperluanRequest extends FormRequest
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
            'id_kapal'          => 'required',
            'bongkar_barang'    => 'nullable|numeric',
            'muat_barang'       => 'nullable|numeric',
            'jenis_barang'      => 'nullable',
            'keterangan'        => 'nullable'
        ];
    }
}
