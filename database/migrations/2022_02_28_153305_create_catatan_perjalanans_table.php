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
        Schema::create('catatan_perjalanans', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->date('tanggal_masuk');
            $table->text('jam_masuk');
            $table->text('jam_keluar');
            $table->text('lokasi');
            $table->text('suhu_tubuh');
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
        Schema::dropIfExists('catatan_perjalanans');
    }
};
