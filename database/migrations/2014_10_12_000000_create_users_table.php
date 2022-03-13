<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 150);
            $table->string('email', 150);
            //$table->timestamp('email_verified_at')->nullable();
            $table->string('password', 60);
            $table->string('priv', 1)->default('G'); //G=General A=Admin
            $table->string('position', 2)->default('FA'); //FA, PG, UG, AG, AU
            $table->string('photo')->nullable();
            $table->text('introduction')->nullable();
            $table->text('awards')->nullable();
            $table->text('publications')->nullable();
            $table->text('thesistopic')->nullable();
            $table->text('thesisabstract')->nullable();
            //$table->rememberToken();
            $table->text('organisation')->nullable();
            $table->text('telephone')->nullable();
            $table->text('linka')->nullable();
            $table->text('linkr')->nullable();
            $table->text('linkx')->nullable();
            $table->string('display', 1)->default('N');
            $table->timestamps();
            $table->unique(['email'], 'user_email_uk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
