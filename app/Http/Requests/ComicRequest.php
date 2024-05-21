<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:3|max:50',
            'description' => 'required|min:3',
            'thumb' => 'required|min:3|max:50',
            'price' => 'required|min:3|max:10',
            'series' => 'required|min:3|max:255',
            'sale_date' => 'required',
            'type' => 'required|min:3|max:20',
            'artists' => 'required|min:3',
            'writers' => 'required|min:3',
        ];
    }

    public function messages()
    {
        return[
            'title.required' => 'Il titolo è un campo obbligatorio',
            'title.min' => 'Il titolo deve contenere almeno :min caratteri',
            'title.max' => 'Il titolo deve contenere non più di :max caratteri',
            'description.required' => 'La descrizione è un campo obbligatorio',
            'description.min' => 'La descrizione deve contenere almeno :min caratteri',
            'thumb.required' => 'La thumb è un campo obbligatorio',
            'thumb.min' => 'La thumb deve contenere almeno :min caratteri',
            'thumb.max' => 'La thumb deve contenere non più di :max caratteri',
            'price.required' => 'Il prezzo è un campo obbligatorio',
            'price.min' => 'Il prezzo deve contenere almeno :min caratteri',
            'price.max' => 'Il prezzo deve contenere non più di :max caratteri',
            'series.required' => 'La saga è un campo obbligatorio',
            'series.min' => 'La saga deve contenere almeno :min caratteri',
            'series.max' => 'La saga deve contenere non più di :max caratteri',
            'sale_date.required' => 'Il giorno di uscita è un campo obbligatorio',
            'type.required' => 'Il genere è un campo obbligatorio',
            'type.min' => 'Il genere deve contenere almeno :min caratteri',
            'type.max' => 'Il genere deve contenere non più di :max caratteri',
            'artists.required' => 'Artisti è un campo obbligatorio',
            'artists.min' => 'Artisti deve contenere almeno :min caratteri',
            'writers.required' => 'Sceneggiatori è un campo obbligatorio',
            'writers.min' => 'Sceneggiatori deve contenere almeno :min caratteri',

        ];
    }
}
