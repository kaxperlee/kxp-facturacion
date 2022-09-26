<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->smallInteger('CodigoEmpresa');
            $table->string('Empresa', 100);
            $table->string('NombrePersona', 100);
            $table->string('CifDni', 10);
            $table->date('FechaAlta');
            $table->date('FechaBaja');
            $table->string('Direccion', 100);
            $table->string('CodigoPostal', 5);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresas');
    }
};
