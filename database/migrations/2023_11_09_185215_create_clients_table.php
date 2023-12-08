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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('customer_id')->unique();
            $table->string('name');
            $table->string('last_name');
            $table->date('date_of_birth');
            $table->char('gender');
            $table->text('cellphone');
            $table->text('phone_number');
            $table->text('address');
            $table->text('type');
            $table->text('exempt');
            $table->text('taxes');
            $table->text('perception');
            $table->text('social_reason');
            $table->text('commercial_name');
            $table->text('main_activity');
            $table->text('commercial_address');
            $table->text('state');
            $table->text('city');
            $table->text('country');
            $table->text('age');
            $table->text('nationality');
            $table->text('occupation');
            $table->text('email');
            $table->text('dui');
            $table->text('nit');
            $table->text('nrc');
            $table->text('passport');
            $table->text('category');
            $table->text('shipping_address');
            $table->text('branch_count');
            $table->text('document_name');
            $table->text('document');
            $table->text('origin_money');
            $table->text('payment_type');
            $table->text('payment_method');
            $table->text('days_tocall');
            $table->text('estimated_purchase');
            $table->text('frequency');
            $table->text('credit_limit');
            $table->text('total_income');
            $table->text('total_expenses');
            $table->text('total_fixed_assents');
            $table->text('total_passives');
            $table->text('payment_officer');
            $table->text('position');
            $table->text('type_doc_payment');
            $table->text('id_payment');
            $table->text('authorizing_seller');
            $table->text('authorizing_boss');
            $table->text('compliance_officer');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
