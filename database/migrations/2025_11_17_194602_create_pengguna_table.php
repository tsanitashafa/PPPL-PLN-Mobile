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
        Schema::create('pengguna', function (Blueprint $table) {
            $table->id('penggunaid');
            $table->string('phone');
            $table->string('nama');
            $table->string('email');
            $table->string('pin');
            $table->integer('poin')->default(0);
            $table->string('tier')->default('bronze');
            $table->boolean('notifenabled')->default(false);
            $table->decimal('saldo', 15, 2)->default(0);
            $table->string('profile_image')->nullable();
            $table->date('tanggallahir')->nullable();
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengguna');
    }
};
