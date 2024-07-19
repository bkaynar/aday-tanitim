<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sayfalalars', function (Blueprint $table) {
            $table->id();
            $table->string('baslik');
            $table->text('foto_yol')->nullable();//Fotoğraf yolu
            $table->text('icerik');
            $table->boolean('anasayfa');//Eğer işaretli ise anasayfada gösterilecek
            $table->integer('sirasi')->nullable();
            $table->string('slug')->nullable();
            $table->boolean('silindi')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sayfalalars');
    }
};
