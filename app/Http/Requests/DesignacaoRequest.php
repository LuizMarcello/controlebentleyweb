<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DesignacaoRequest extends FormRequest
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
            'bandaLnb' => ['required'],
            'bandaModem' => ['required'],
            'diametroAntena' => ['required'],
            'marcaLnb' => ['required'],
            'marcaModem' => ['required'],
            'modeloAntena' => ['required'],
            'modeloLnb' => ['required'],
            'modeloModem' => ['required'],
            'serialLnb' => ['required'],
            'serialModem' => ['required']
        ];
    }
}
