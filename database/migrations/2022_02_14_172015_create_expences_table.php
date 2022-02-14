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
        Schema::create('expences', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->date('expence_date');
            $table->string('description');
            $table->float('amount');
            $table->unsignedBigInteger('out_category_id');
            $table->boolean('monthly_auto');
            $table->foreign('out_category_id')->references('id')->on('out_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expences');
    }
};
