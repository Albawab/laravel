<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeriodItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('period_items', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('period_id')->unsigned();
           // $table->unsignedBigInteger('period_id');
           // $table->foreignId('period_id')->constrained('periods');
            //$table->foreign('period_id')->references('id')->on('periods');
            $table->string('lalo');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('period_items');
    }
}
