<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateProductRequest extends FormRequest
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
        $id = $this->id;
        return [
            'img[]' => 'image|max:4',
            'produto' => 'required|min:2|max:255',
            'codico_produto' => "required|unique:produtos,codico_produto,{$id},id",
            'descricao' => 'required|min:2|max:10000',
            'preco_antigo' => "nullable|regex:/^\d+(\.\d{1,2})?$/",
            'promocao' => "required|regex:/^\d+(\.\d{1,2})?$/",
            'categoria' => 'required',
            'tamanho' => 'required',
            'estoque' => 'required',
            'detalhes' => 'nullable|min:2|max:10000',
        ];
    }
    public function messages() {
        return [
            'name.required' => 'Nome é obrigatorio',
            'name.min' => 'Ops!, Precisa informar pelo menos 3 caracteres',
            'photo.required' => 'Ops!, Precisa informar uma imagem',
        ];
    }
}
