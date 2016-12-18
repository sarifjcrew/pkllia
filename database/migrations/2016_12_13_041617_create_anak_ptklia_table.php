<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnakPtkliaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('anak_ptklia', function(Blueprint $table){
            $table->increments('id');
            $table->integer('ptk_id');
            $table->string('statusAnakId')->nullable();
            $table->string('nama')->nullable();
            $table->string('jenisKelamin')->nullable();
            $table->string('tempatLahir')->nullable();
            $table->date('tanggalLahir')->nullable();
            $table->string('jenjangPendidikanId')->nullable();
            $table->string('nisn')->nullable();
            $table->string('tahunMasuk')->nullable();

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
        //
        Schema::drop('anak_ptklia');
    }
}
