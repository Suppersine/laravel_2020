<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAwardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('awards', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->text('date_received')->nullable();
            $table->text('title')->nullable();
            $table->text('cat')->nullable();
            $table->text('sponsor')->nullable();
            $table->text('personel')->nullable();
            $table->integer('given_to_1')->nullable();
            $table->integer('given_to_2')->nullable();
            $table->integer('given_to_3')->nullable();
            $table->integer('given_to_4')->nullable();
            $table->integer('given_to_5')->nullable();
            $table->integer('given_to_6')->nullable();
            $table->integer('given_to_7')->nullable();
            $table->integer('given_to_8')->nullable();
            $table->integer('given_to_9')->nullable();
            $table->integer('given_to_10')->nullable();
            $table->integer('given_to_11')->nullable();
            $table->integer('given_to_12')->nullable();
            $table->text('adesc')->nullable();
            $table->text('commentary')->nullable();
            $table->string('photo', 250)->nullable();
            $table->string('display', 1)->default('N');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('awards');
    }
}
