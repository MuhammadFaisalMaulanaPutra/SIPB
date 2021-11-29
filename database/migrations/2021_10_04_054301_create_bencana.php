<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBencana extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bencana', function (Blueprint $table) {
            $table->id('id_bencana');
            $table->string('Nama_bencana');
            $table->timestamps();
        });
        
        Schema::table('bencana', function (Blueprint $table) {
            $table->foreignId('FK_Id_kategori_bencana')->constrained('kategori_bencana');
});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bencana');
    }
}
