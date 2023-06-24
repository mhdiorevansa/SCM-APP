<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sayur_keluar', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sayur_id');
            $table->foreign('sayur_id')->references('id')->on('sayur')->onDelete('cascade');
            $table->string('jumlah');
            $table->date('tanggal_keluar');
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
        Schema::dropIfExists('sayur_keluar');
    }
};
