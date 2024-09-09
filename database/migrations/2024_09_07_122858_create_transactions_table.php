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
            $table->foreignId('account_id')->constrained()->onDelete('cascade');  // Relación con cuentas
            $table->foreignId('category_id')->constrained()->onDelete('cascade'); // Relación con categorías
            $table->foreignId('transaction_type_id')->constrained()->onDelete('cascade'); // Relación con tipos de transacciones
            $table->decimal('amount', 15, 2);  // Monto de la transacción
            $table->text('description')->nullable();  // Descripción opcional de la transacción
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
