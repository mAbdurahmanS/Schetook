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
            $table->id();
            $table->foreignId('nisn');
            $table->string('name');
            $table->string('username')->unique();
            $table->string('email');
            $table->string('password');
            $table->string('gender');
            $table->string('wali');
            $table->string('alamat');
            $table->foreignId('telpon');
            $table->foreignId('level_id');
            $table->foreignId('kelas_id');
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
        Schema::dropIfExists('users');
    }
}
