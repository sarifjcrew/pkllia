<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePtkLiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('ptk_lia', function(Blueprint $table){
            $table->increments('id');
            $table->string('nama')->nullable();
            $table->string('nik')->nullable();
            $table->boolean('jenisKelamin')->nullable();
            $table->string('tempatLahir')->nullable();
            $table->date('tanggalLahir')->nullable();
            $table->string('namaIbu')->nullable();
            $table->string('alamat')->nullable();
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->string('noKartuKeluarga')->nullable();
            $table->string('npwp')->nullable();
            $table->string('nipSuamiIstri')->nullable();
            $table->string('nrg')->nullable();
            $table->string('kelurahanDesa')->nullable();
            $table->string('kecamatanKabupatenPropinsi')->nullable();
            $table->string('kodePos')->nullable();
            $table->string('agama')->nullable();
            $table->string('kewarganegaraan')->nullable();
            $table->string('statusPerkawinan')->nullable();
            $table->string('namaSuamiIstri')->nullable();
            $table->string('pekerjaanSuamiIstri')->nullable();
            $table->string('statusKepegawaian')->nullable();
            $table->string('nip')->nullable();
            $table->string('niyNigk')->nullable();
            $table->string('nigb')->nullable();
            $table->string('nuptk')->nullable();
            $table->string('skPengangkat')->nullable();
            $table->date('tmtPengangkat')->nullable();
            $table->string('pangkatGolongan')->nullable();
            $table->string('jenisPtk')->nullable();
            $table->string('statusAktif')->nullable();
            $table->string('lembagaPengangkat')->nullable();
            $table->string('sumberGaji')->nullable();
            $table->string('punyaLisensiKepalaSekolah')->nullable();
            $table->string('pernahDiklatKepegawaian')->nullable();
            $table->string('keahlianBraille')->nullable();
            $table->string('hp')->nullable();
            $table->string('alamatEmail')->nullable();
            $table->string('noTelepon')->nullable();
            $table->string('noFax')->nullable();

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
        Schema::drop('ptk_lia');
    }
}
