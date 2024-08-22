<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncidentesTable extends Migration
{
    public function up()
    {
        Schema::create('incidentes', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('descripcion');
            $table->string('tipo');
            $table->string('estado')->default('Pendiente'); // Ejemplo de estado
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('incidentes');
    }
}
