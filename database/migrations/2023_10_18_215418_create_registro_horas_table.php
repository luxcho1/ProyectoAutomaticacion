<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('registro_horas', function (Blueprint $table) {
            $table->id();

            $table->string('id_reserva');
            $table->string('rut');
            $table->string('motivo_reserva');
            $table->string('fecha');
            $table->string('hora');
            $table->string('auto_marca');
            $table->string('auto_modelo');
            $table->string('auto_año');

            $table->timestamps();

        });
    }

    /*ID de la reserva, 
    Rut del cliente, 
    breve descripción del motivo de la reserva, 
    la fecha, 
    la hora, 
    marca del auto, 
    el modelo del auto,  
    año
    */

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registro_horas');
    }
};

            