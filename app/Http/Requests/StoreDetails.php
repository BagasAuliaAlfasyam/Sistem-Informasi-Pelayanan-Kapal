<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDetails extends FormRequest
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
            'kapal_id'      => 'required|unique:App\Models\Details,kapal_id',
            'nama_kapal'    => 'required',
            'muat_barang'   => 'nullable|numeric',
            'bongkar'       => 'nullable|numeric',
            'jenis_barang'  => 'nullable',
            'keterangan'    => 'nullable'
        ];
    }
}