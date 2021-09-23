<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SongCreateRequest extends FormRequest
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
            'title' => 'required',
            'author' => 'required',
            'description' => '',
            'file' => 'required|file'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Veuillez entre le titre du morceau',
            'author.required' => 'Veuillez entrer l\'auteur du morceau',
            'author.required' => '',
            'file.required' => 'Veuillez uploader le fichier du morceau',
        ];
    }
}
