<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMutabaahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mutabaahs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sholat_wajib');
            $table->integer('jamaah_awal_waktu');
            $table->integer('subuh_jamaah');
            $table->integer('qiyamul_lail');
            $table->integer('witir');
            $table->integer('istighfar');
            $table->integer('puasa_sunah');
            $table->integer('tilawah');
            $table->integer('matsurat');
            $table->integer('duha');
            $table->integer('baca_buku_islam');
            $table->integer('hafalan_quran');
            $table->integer('hafalan_hadis');
            $table->integer('minggu');
            $table->integer('npm');
            $table->foreign('npm')
                ->references('npm')->on('users')
                ->onDelete('cascade');
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
        Schema::dropIfExists('mutabaahs');
    }
}
