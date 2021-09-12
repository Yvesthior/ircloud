<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Analysi extends Model
{
    use SoftDeletes;
    use Auditable;
    use HasFactory;

    public $table = 'analysis';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'naissance',
        'heure_prelev',
        'date_prelev',
        'identification',
        'prenom',
        'nom',
        'technique',
        'ct',
        'resultat',
        'conclusion',
        'origine_prelev',
        'date_rendu',
        'type_cas',
        'age',
        'sexe',
        'email',
        'whatsapp',
        'code_interne',
        'adresse',
        'telephone',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
