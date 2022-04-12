<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJamPelajaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jam_pelajarans', function (Blueprint $table) {
            $table->id();
            $table->string('hari');
            $table->foreignId('mapel_id');
            $table->foreignId('waktu_id');
            $table->foreignId('kelas_id');
            $table->foreignId('guru_id');
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
        Schema::dropIfExists('jam_pelajarans');
    }
}
