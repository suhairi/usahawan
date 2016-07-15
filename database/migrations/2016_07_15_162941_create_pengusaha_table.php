<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengusahaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengusaha', function (Blueprint $table) {
            $table->increments('id');
            $table->string('noKP');
            $table->string('nama');
            $table->string('jantina');
            $table->string('noTel');
            $table->integer('pendidikan');
            $table->string('institusiPendidikan');
            $table->string('bidangPengajian');
            $table->integer('bangsa');
            $table->string('warganegara');
            $table->string('perkahwinan');
            $table->text('alamat');
            $table->integer('dun');
            $table->integer('parlimen');
            $table->integer('daerah');
            $table->string('statusAhliPPK');
            $table->integer('ppk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pengusaha');
    }
}
