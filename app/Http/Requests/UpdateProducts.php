<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProducts extends FormRequest
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
            'img[]' => 'nullable|image|max:4',
            'produto' => 'nullable|min:2|max:255',
            'codico_produto' => "unique:produtos,codico_produto,{$id},id",
            'descricao' => 'nullable|max:10000',
            'preco_antigo' => "nullable|regex:/^\d+(\.\d{1,2})?$/",
            'promocao' => "|regex:/^\d+(\.\d{1,2})?$/",
            'categoria' => 'nullable',
            'tamanho' => 'nullable',
            'estoque' => 'nullable',
            'detalhes' => 'nullable|min:2|max:10000',
        ];
    }
}
