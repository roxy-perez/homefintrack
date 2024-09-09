<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $transaction = Transaction::create([
            'account_id' => 1,  // ID de la cuenta asociada
            'category_id' => 1,  // ID de la categoría asociada
            'transaction_type_id' => 1,  // ID del tipo de transacción (1 = Ingreso, 2 = Gasto)
            'amount' => 100.00,  // Monto de la transacción
            'description' => 'Pago de salario',  // Descripción de la transacción
        ]);
    }
}
