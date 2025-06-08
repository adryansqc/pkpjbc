<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produk_lists', function (Blueprint $table) {
            $table->id();
            $table->integer('status')->nullable();
            $table->string('kode_ruko', 10);
            $table->string('no_ruko', 10);
            $table->string('l_tanah', 20);
            $table->string('p_tanah', 20);
            $table->string('luas_tanah', 20);
            $table->string('type_bangunan', 20);
            $table->string('l_bangunan', 20);
            $table->float('h_jual_exc_ppn');
            $table->float('ppn');
            $table->float('h_jual_inc_ppn');
            $table->string('uuid')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk_lists');
    }
};
