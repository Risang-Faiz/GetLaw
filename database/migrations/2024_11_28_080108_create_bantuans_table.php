<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBantuansTable extends Migration
{
    public function up()
    {
        Schema::create('bantuans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email');
            $table->text('kebutuhan_bantuan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bantuans');
    }
}