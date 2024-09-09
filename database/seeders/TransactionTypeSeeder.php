<?php

namespace Database\Seeders;

use App\Models\TransactionType;
use Illuminate\Database\Seeder;

class TransactionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear el tipo "Ingreso"
        TransactionType::create([
            'name' => 'Income',
            'description' => 'Represents income transactions',
        ]);

        // Crear el tipo "Gasto"
        TransactionType::create([
            'name' => 'Expense',
            'description' => 'Represents expense transactions',
        ]);
    }
}
