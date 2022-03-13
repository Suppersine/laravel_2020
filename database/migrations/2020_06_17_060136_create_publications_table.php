<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publications', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('display', 1);
            $table->date('date_pub')->nullable();
            $table->text('title')->nullable();
            $table->text('cat')->nullable();
            $table->text('personel')->nullable();
            $table->text('written_by_1')->nullable();
            $table->text('written_by_2')->nullable();
            $table->text('written_by_3')->nullable();
            $table->text('written_by_4')->nullable();
            $table->text('written_by_5')->nullable();
            $table->text('written_by_6')->nullable();
            $table->text('written_by_7')->nullable();
            $table->text('written_by_8')->nullable();
            $table->text('written_by_9')->nullable();
            $table->text('written_by_10')->nullable();
            $table->text('written_by_11')->nullable();
            $table->text('written_by_12')->nullable();
            $table->text('abstract')->nullable();
            $table->text('intro')->nullable();
            $table->text('methods')->nullable();
            $table->text('result_discn')->nullable();
            $table->text('conclusions')->nullable();
            $table->text('refren')->nullable();
            $table->text('linkz')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publications');
    }
}
