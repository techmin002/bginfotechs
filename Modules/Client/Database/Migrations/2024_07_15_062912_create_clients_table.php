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
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('user_id');
            $table->string('company_name');
            $table->string('phone_no');
            $table->string('company_address');
            $table->string('company_phone')->nullable();
            $table->string('company_logo')->nullable();
            $table->string('pan_vat')->nullable();
            $table->longText('company_details')->nullable();
            $table->string('status')->default('on');
            $table->enum('company_state', ['running', 'completed', 'suspended','hold']);
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
