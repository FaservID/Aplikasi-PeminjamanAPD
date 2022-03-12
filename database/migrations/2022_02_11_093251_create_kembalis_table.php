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
        Schema::create('kembalis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pinjam');
            $table->timestamp('waktu_kembali');
            $table->string('status_kembali');
            $table->timestamps();
            $table->foreign('id_pinjam')->references('id')->on('pinjams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kembalis');
    }
};
