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
        Schema::create('albaraneslineas', function (Blueprint $table) {
            $table->id();
            $table->smallInteger('CodigoEmpresa');
            $table->smallInteger('EjercicioAlbaran');
            $table->Integer('NumeroAlbaran');
            $table->date('FechaAlbaran');
            $table->string('DescripcionArticulo', 150);
            $table->string('UnidadMedida', 5);
            $table->smallInteger('GrupoIva');
            $table->Integer('UnidadesArticulo');
            $table->Integer('PrecioArticulo');
            $table->Integer('TotalImporte');
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
        Schema::dropIfExists('albaraneslineas');
    }
};
