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
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('user_id');
            $table->text('address');
            $table->string('phone');
            $table->string('training');
            $table->string('qualification');
            $table->date('admission_date');
            $table->date('complete_date');
            $table->integer('total_fees')->default(0);
            $table->integer('paid_fees')->default(0);
            $table->integer('due_fees')->default(0);
            $table->string('certificate')->nullable();
            $table->string('status')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
