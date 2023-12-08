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
        Schema::create('check_documents', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('clients');

            $table->boolean('dui_150');
            $table->boolean('nit_150');
            $table->boolean('nrc_150');
            $table->boolean('recibo');
            $table->boolean('nit_company');
            $table->boolean('nrc_company');
            $table->boolean('matricula_company');
            $table->boolean('consulta_list_cautela');
            $table->boolean('acta_constitucion');
            $table->boolean('credenciales_representante');
            $table->boolean('dui_representante');
            $table->boolean('nit_representante');
            $table->boolean('last_rent');
            $table->boolean('iva_2');
            $table->boolean('pagare');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('check_documents');
    }
};
