<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrangTua extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('orang_tua', function (Blueprint $table) {
            $table->increments('id_orang_tua');
            $table->string('nama');
            $table->integer('id_siswa')->unsigned();
            $table->string('email');
            $table->string('password');
            $table->foreign('id_siswa')
                    ->references('id_siswa')
                    ->on('siswa')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->rememberToken();
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
        Schema::dropIfExists('orang_tua');
    }
}
