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
        Schema::create('cerita', function (Blueprint $table) {
            $table->id();
            $table->foreignId('terpulang_id')->constrained('terpulang');
            $table->foreignId('penulis_id')->constrained('users');
            $table->text('isi_cerita');
            $table->string('kenal_darimana');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cerita');
    }
};
