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
        Schema::create('legal_entity', function (Blueprint $table) {
            $table->id();
            //Relationships
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('clients');

            $table->string('name');
            $table->string('last_name');
            $table->string('address');
            $table->string('state');
            $table->string('city');
            $table->string('country');
            $table->string('matirial_status');
            $table->string('dui');
            $table->string('nit');
            $table->string('passport');
            $table->string('email');
            $table->string('document_name');
            $table->integer('document');
            $table->text('cellphone');
            $table->text('phone_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('legal_entity');
    }
};
