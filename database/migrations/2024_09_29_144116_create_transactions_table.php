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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('wallet_id')->constrained()->onDelete('cascade');  // Relasi ke tabel wallet
            $table->decimal('amount', 15, 2);  // Jumlah transaksi
            $table->enum('type', ['credit', 'debit']);  // Jenis transaksi (kredit atau debit)
            $table->string('description')->nullable();  // Deskripsi transaksi
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
