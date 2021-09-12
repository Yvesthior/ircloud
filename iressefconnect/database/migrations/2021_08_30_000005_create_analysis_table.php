<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnalysisTable extends Migration
{
    public function up()
    {
        Schema::create('analysis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('naissance')->nullable();
            $table->string('heure_prelev')->nullable();
            $table->string('date_prelev');
            $table->string('identification');
            $table->string('prenom');
            $table->string('nom');
            $table->string('technique');
            $table->string('ct');
            $table->string('resultat');
            $table->string('conclusion');
            $table->string('origine_prelev');
            $table->string('date_rendu');
            $table->string('type_cas');
            $table->string('age');
            $table->string('sexe');
            $table->string('email');
            $table->string('whatsapp');
            $table->string('code_interne');
            $table->string('adresse')->nullable();
            $table->string('telephone');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
