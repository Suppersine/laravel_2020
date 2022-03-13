<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDisplayToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('display', 1)->default('N');
        });
        Schema::table('awards', function (Blueprint $table) {
            $table->string('display', 1)->default('N');
        });
        Schema::table('news', function (Blueprint $table) {
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
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('display');
        });
        Schema::table('awards', function (Blueprint $table) {
            $table->dropColumn('display');
        });
        Schema::table('news', function (Blueprint $table) {
            $table->dropColumn('display');
        });
    }
}
