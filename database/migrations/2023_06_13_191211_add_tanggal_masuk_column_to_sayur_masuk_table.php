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
        Schema::table('sayur_masuk', function (Blueprint $table) {
            $table->date('tanggal_masuk')->after('jumlah')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sayur_masuk', function (Blueprint $table) {
            $table->dropColumn('tanggal_masuk');
        });
    }
};