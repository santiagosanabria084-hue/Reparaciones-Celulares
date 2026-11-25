<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
 public function up(): void {
    Schema::create ('reparaciones', function (Blueprint $table){
        $table->id();
        
        $table->string('cliente');
        $table->string('marca');
        $table->string('modelo');


        $table->string('falla');

        $table->string('fecha_ingreso');


        $table->enum ('estado', [
            'Ingresado',
            'En reparación',
            'Reparado',
            'Entregado'
        ]);

        $table->timestamps();

 });


    }
};

    




   