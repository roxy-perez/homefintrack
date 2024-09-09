<?php

namespace Database\Seeders;

use App\Models\RecurringTransaction;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class RecurringTransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RecurringTransaction::create([
            'account_id' => 1,
            'category_id' => 1,
            'transaction_type_id' => 1,
            'amount' => 100.00,
            'description' => 'Suscripción de Netflix',
            'start_date' => Carbon::now(),
            'end_date' => null,
            'frequency' => 'monthly',
            'next_run_date' => Carbon::now()->addMonth(),
        ]);
    }
}
