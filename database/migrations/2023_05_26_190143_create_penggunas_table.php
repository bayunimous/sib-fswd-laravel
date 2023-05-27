<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenggunasTable extends Migration
{
    public function up()
    {
        Schema::create('penggunas', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->default('');
            $table->unsignedBigInteger('grup_id');
            $table->foreign('grup_id')->references('id')->on('grup_penggunas');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('penggunas');
    }
}
