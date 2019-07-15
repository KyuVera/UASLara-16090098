<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblArtikelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_artikels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul', 50);
            $table->text('isi');
            $table->string('gambar')->nullable();
            $table->timestamps();
            $table->datetime('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_artikels');
    }
}
