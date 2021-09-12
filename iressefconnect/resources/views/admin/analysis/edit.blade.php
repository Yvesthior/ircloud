@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.analysi.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.analysis.update", [$analysi->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="naissance">{{ trans('cruds.analysi.fields.naissance') }}</label>
                <input class="form-control {{ $errors->has('naissance') ? 'is-invalid' : '' }}" type="text" name="naissance" id="naissance" value="{{ old('naissance', $analysi->naissance) }}">
                @if($errors->has('naissance'))
                    <div class="invalid-feedback">
                        {{ $errors->first('naissance') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.analysi.fields.naissance_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="heure_prelev">{{ trans('cruds.analysi.fields.heure_prelev') }}</label>
                <input class="form-control {{ $errors->has('heure_prelev') ? 'is-invalid' : '' }}" type="text" name="heure_prelev" id="heure_prelev" value="{{ old('heure_prelev', $analysi->heure_prelev) }}">
                @if($errors->has('heure_prelev'))
                    <div class="invalid-feedback">
                        {{ $errors->first('heure_prelev') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.analysi.fields.heure_prelev_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="date_prelev">{{ trans('cruds.analysi.fields.date_prelev') }}</label>
                <input class="form-control {{ $errors->has('date_prelev') ? 'is-invalid' : '' }}" type="text" name="date_prelev" id="date_prelev" value="{{ old('date_prelev', $analysi->date_prelev) }}" required>
                @if($errors->has('date_prelev'))
                    <div class="invalid-feedback">
                        {{ $errors->first('date_prelev') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.analysi.fields.date_prelev_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="identification">{{ trans('cruds.analysi.fields.identification') }}</label>
                <input class="form-control {{ $errors->has('identification') ? 'is-invalid' : '' }}" type="text" name="identification" id="identification" value="{{ old('identification', $analysi->identification) }}" required>
                @if($errors->has('identification'))
                    <div class="invalid-feedback">
                        {{ $errors->first('identification') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.analysi.fields.identification_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="prenom">{{ trans('cruds.analysi.fields.prenom') }}</label>
                <input class="form-control {{ $errors->has('prenom') ? 'is-invalid' : '' }}" type="text" name="prenom" id="prenom" value="{{ old('prenom', $analysi->prenom) }}" required>
                @if($errors->has('prenom'))
                    <div class="invalid-feedback">
                        {{ $errors->first('prenom') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.analysi.fields.prenom_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="nom">{{ trans('cruds.analysi.fields.nom') }}</label>
                <input class="form-control {{ $errors->has('nom') ? 'is-invalid' : '' }}" type="text" name="nom" id="nom" value="{{ old('nom', $analysi->nom) }}" required>
                @if($errors->has('nom'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nom') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.analysi.fields.nom_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="technique">{{ trans('cruds.analysi.fields.technique') }}</label>
                <input class="form-control {{ $errors->has('technique') ? 'is-invalid' : '' }}" type="text" name="technique" id="technique" value="{{ old('technique', $analysi->technique) }}" required>
                @if($errors->has('technique'))
                    <div class="invalid-feedback">
                        {{ $errors->first('technique') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.analysi.fields.technique_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="ct">{{ trans('cruds.analysi.fields.ct') }}</label>
                <input class="form-control {{ $errors->has('ct') ? 'is-invalid' : '' }}" type="text" name="ct" id="ct" value="{{ old('ct', $analysi->ct) }}" required>
                @if($errors->has('ct'))
                    <div class="invalid-feedback">
                        {{ $errors->first('ct') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.analysi.fields.ct_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="resultat">{{ trans('cruds.analysi.fields.resultat') }}</label>
                <input class="form-control {{ $errors->has('resultat') ? 'is-invalid' : '' }}" type="text" name="resultat" id="resultat" value="{{ old('resultat', $analysi->resultat) }}" required>
                @if($errors->has('resultat'))
                    <div class="invalid-feedback">
                        {{ $errors->first('resultat') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.analysi.fields.resultat_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="conclusion">{{ trans('cruds.analysi.fields.conclusion') }}</label>
                <input class="form-control {{ $errors->has('conclusion') ? 'is-invalid' : '' }}" type="text" name="conclusion" id="conclusion" value="{{ old('conclusion', $analysi->conclusion) }}" required>
                @if($errors->has('conclusion'))
                    <div class="invalid-feedback">
                        {{ $errors->first('conclusion') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.analysi.fields.conclusion_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="origine_prelev">{{ trans('cruds.analysi.fields.origine_prelev') }}</label>
                <input class="form-control {{ $errors->has('origine_prelev') ? 'is-invalid' : '' }}" type="text" name="origine_prelev" id="origine_prelev" value="{{ old('origine_prelev', $analysi->origine_prelev) }}" required>
                @if($errors->has('origine_prelev'))
                    <div class="invalid-feedback">
                        {{ $errors->first('origine_prelev') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.analysi.fields.origine_prelev_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="date_rendu">{{ trans('cruds.analysi.fields.date_rendu') }}</label>
                <input class="form-control {{ $errors->has('date_rendu') ? 'is-invalid' : '' }}" type="text" name="date_rendu" id="date_rendu" value="{{ old('date_rendu', $analysi->date_rendu) }}" required>
                @if($errors->has('date_rendu'))
                    <div class="invalid-feedback">
                        {{ $errors->first('date_rendu') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.analysi.fields.date_rendu_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="type_cas">{{ trans('cruds.analysi.fields.type_cas') }}</label>
                <input class="form-control {{ $errors->has('type_cas') ? 'is-invalid' : '' }}" type="text" name="type_cas" id="type_cas" value="{{ old('type_cas', $analysi->type_cas) }}" required>
                @if($errors->has('type_cas'))
                    <div class="invalid-feedback">
                        {{ $errors->first('type_cas') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.analysi.fields.type_cas_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="age">{{ trans('cruds.analysi.fields.age') }}</label>
                <input class="form-control {{ $errors->has('age') ? 'is-invalid' : '' }}" type="text" name="age" id="age" value="{{ old('age', $analysi->age) }}" required>
                @if($errors->has('age'))
                    <div class="invalid-feedback">
                        {{ $errors->first('age') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.analysi.fields.age_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="sexe">{{ trans('cruds.analysi.fields.sexe') }}</label>
                <input class="form-control {{ $errors->has('sexe') ? 'is-invalid' : '' }}" type="text" name="sexe" id="sexe" value="{{ old('sexe', $analysi->sexe) }}" required>
                @if($errors->has('sexe'))
                    <div class="invalid-feedback">
                        {{ $errors->first('sexe') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.analysi.fields.sexe_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="email">{{ trans('cruds.analysi.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" name="email" id="email" value="{{ old('email', $analysi->email) }}" required>
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.analysi.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="whatsapp">{{ trans('cruds.analysi.fields.whatsapp') }}</label>
                <input class="form-control {{ $errors->has('whatsapp') ? 'is-invalid' : '' }}" type="text" name="whatsapp" id="whatsapp" value="{{ old('whatsapp', $analysi->whatsapp) }}" required>
                @if($errors->has('whatsapp'))
                    <div class="invalid-feedback">
                        {{ $errors->first('whatsapp') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.analysi.fields.whatsapp_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="code_interne">{{ trans('cruds.analysi.fields.code_interne') }}</label>
                <input class="form-control {{ $errors->has('code_interne') ? 'is-invalid' : '' }}" type="text" name="code_interne" id="code_interne" value="{{ old('code_interne', $analysi->code_interne) }}" required>
                @if($errors->has('code_interne'))
                    <div class="invalid-feedback">
                        {{ $errors->first('code_interne') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.analysi.fields.code_interne_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="adresse">{{ trans('cruds.analysi.fields.adresse') }}</label>
                <input class="form-control {{ $errors->has('adresse') ? 'is-invalid' : '' }}" type="text" name="adresse" id="adresse" value="{{ old('adresse', $analysi->adresse) }}">
                @if($errors->has('adresse'))
                    <div class="invalid-feedback">
                        {{ $errors->first('adresse') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.analysi.fields.adresse_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="telephone">{{ trans('cruds.analysi.fields.telephone') }}</label>
                <input class="form-control {{ $errors->has('telephone') ? 'is-invalid' : '' }}" type="text" name="telephone" id="telephone" value="{{ old('telephone', $analysi->telephone) }}" required>
                @if($errors->has('telephone'))
                    <div class="invalid-feedback">
                        {{ $errors->first('telephone') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.analysi.fields.telephone_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection