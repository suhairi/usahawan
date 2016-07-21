<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePpkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ppk', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kod'); // A1, B1, A2, G4 .....
            $table->smallInteger('wilayah');
            $table->string('nama')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('ppk');
    }
}
