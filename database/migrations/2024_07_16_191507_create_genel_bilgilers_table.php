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
        Schema::create('genel_bilgilers', function (Blueprint $table) {
            $table->id();
            $table->string('akademik_personel_sayi');
            $table->string('ogrenci');
            $table->string('fakulte_sayi');
            $table->string('yuksel_okul_sayi');
            $table->string('yurt_sayi');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('genel_bilgilers');
    }
};
