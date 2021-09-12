@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.analysi.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.analysis.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.id') }}
                        </th>
                        <td>
                            {{ $analysi->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.naissance') }}
                        </th>
                        <td>
                            {{ $analysi->naissance }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.heure_prelev') }}
                        </th>
                        <td>
                            {{ $analysi->heure_prelev }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.date_prelev') }}
                        </th>
                        <td>
                            {{ $analysi->date_prelev }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.identification') }}
                        </th>
                        <td>
                            {{ $analysi->identification }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.prenom') }}
                        </th>
                        <td>
                            {{ $analysi->prenom }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.nom') }}
                        </th>
                        <td>
                            {{ $analysi->nom }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.technique') }}
                        </th>
                        <td>
                            {{ $analysi->technique }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.ct') }}
                        </th>
                        <td>
                            {{ $analysi->ct }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.resultat') }}
                        </th>
                        <td>
                            {{ $analysi->resultat }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.conclusion') }}
                        </th>
                        <td>
                            {{ $analysi->conclusion }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.origine_prelev') }}
                        </th>
                        <td>
                            {{ $analysi->origine_prelev }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.date_rendu') }}
                        </th>
                        <td>
                            {{ $analysi->date_rendu }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.type_cas') }}
                        </th>
                        <td>
                            {{ $analysi->type_cas }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.age') }}
                        </th>
                        <td>
                            {{ $analysi->age }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.sexe') }}
                        </th>
                        <td>
                            {{ $analysi->sexe }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.email') }}
                        </th>
                        <td>
                            {{ $analysi->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.whatsapp') }}
                        </th>
                        <td>
                            {{ $analysi->whatsapp }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.code_interne') }}
                        </th>
                        <td>
                            {{ $analysi->code_interne }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.adresse') }}
                        </th>
                        <td>
                            {{ $analysi->adresse }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.telephone') }}
                        </th>
                        <td>
                            {{ $analysi->telephone }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.analysis.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection