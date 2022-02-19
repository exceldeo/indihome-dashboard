<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePelanggansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelanggans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kodePelanggan')->unique();
            $table->string('nama');
            $table->string('noTelp');
            $table->string('email');
            $table->string('paket');
            $table->string('alamat');
            $table->string('kodeSales');
            $table->integer('statusPemasangan');
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
        Schema::dropIfExists('pelanggans');
    }
}
