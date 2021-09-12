<?php

namespace App\Http\Requests;

use App\Models\Analysi;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateAnalysiRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('analysi_edit');
    }

    public function rules()
    {
        return [
            'naissance' => [
                'string',
                'nullable',
            ],
            'heure_prelev' => [
                'string',
                'nullable',
            ],
            'date_prelev' => [
                'string',
                'required',
            ],
            'identification' => [
                'string',
                'required',
            ],
            'prenom' => [
                'string',
                'required',
            ],
            'nom' => [
                'string',
                'required',
            ],
            'technique' => [
                'string',
                'required',
            ],
            'ct' => [
                'string',
                'required',
            ],
            'resultat' => [
                'string',
                'required',
            ],
            'conclusion' => [
                'string',
                'required',
            ],
            'origine_prelev' => [
                'string',
                'required',
            ],
            'date_rendu' => [
                'string',
                'required',
            ],
            'type_cas' => [
                'string',
                'required',
            ],
            'age' => [
                'string',
                'required',
            ],
            'sexe' => [
                'string',
                'required',
            ],
            'email' => [
                'string',
                'required',
            ],
            'whatsapp' => [
                'string',
                'required',
            ],
            'code_interne' => [
                'string',
                'required',
            ],
            'adresse' => [
                'string',
                'nullable',
            ],
            'telephone' => [
                'string',
                'required',
            ],
        ];
    }
}
