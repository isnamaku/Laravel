<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomentarLikeDislikePertanyaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komentar_like_dislike_pertanyaan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreign('profil_id')->references('id')->on('profil');
            $table->int('poin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('komentar_like_dislike_pertanyaan');
    }
}
