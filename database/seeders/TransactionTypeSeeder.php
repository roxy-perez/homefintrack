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
        TransactionType::firstOrCreate([
            'name' => 'Income',
        ], [
            'description' => 'Represents income transactions',
        ]);

        TransactionType::firstOrCreate([
            'name' => 'Expense',
        ], [
            'description' => 'Represents expense transactions',
        ]);
    }

}
