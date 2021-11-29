<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailKorban extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_korban', function (Blueprint $table) {
            $table->id('id_detail_korban');
            $table->foreignId('FK_Id_laporan')->constrained('pelaporan');
            $table->char('NIK');
            $table->string('Nama');
            $table->string('Umur');
            $table->string('Kondisi');
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
        Schema::dropIfExists('detail_korban');
    }
}
