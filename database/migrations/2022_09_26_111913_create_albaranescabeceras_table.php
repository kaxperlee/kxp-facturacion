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
        Schema::create('albaranescabeceras', function (Blueprint $table) {
            $table->id();
            $table->smallInteger('CodigoEmpresa');
            $table->smallInteger('EjercicioAlbaran');
            $table->Integer('NumeroAlbaran');
            $table->date('FechaAlbaran');
            $table->Integer('CodigoCliente');
            $table->string('CifDni', 10);
            $table->string('RazonSocial', 100);
            $table->string('Domicilio', 150);
            $table->string('CodigoPostal', 5);
            $table->smallInteger('CodigoMunicipio');
            $table->string('Municipio', 50);
            $table->smallInteger('CodigoProvincia');
            $table->string('Provincia', 50);
            $table->smallInteger('CodigoNacion');
            $table->string('Nacion', 50);
            $table->smallInteger('GrupoIva');
            $table->string('StatusFacturado',10);
            $table->Integer('NumeroFactura');
            $table->smallInteger('EjercicioFactura');
            $table->date('FechaFactura');
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
        Schema::dropIfExists('albaranescabeceras');
    }
};
