<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::insert([
            ['name' => 'Food'],
            ['name' => 'Rent'],
            ['name' => 'Clothing'],
            ['name' => 'Household'],
            ['name' => 'Transportation'],
            ['name' => 'Travel'],
            ['name' => 'Entertainment'],
            ['name' => 'Health'],
            ['name' => 'Savings'],
            ['name' => 'School'],
            ['name' => 'Other'],]);
    }
}
