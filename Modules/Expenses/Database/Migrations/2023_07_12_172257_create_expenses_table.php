<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('expense_category_id');
            $table->string('vendor')->nullable();
            $table->string('title');
            $table->string('amount');
            $table->date('date');
            $table->string('mode');
            $table->string('amount_from');
            $table->integer('status')->default(1);
            $table->string('paid_by')->nullable();
            $table->string('receipt')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('expenses');
    }
};
