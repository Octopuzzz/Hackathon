<?php

namespace Database\Seeders;

use App\Models\Categery;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categery::create([
            'category_type' => 'Personal Finance',
            'slug' => 'Description-1'
        ]);
        Categery::create([
            'category_type' => 'InvestMent',
            'slug' => 'Description-2'
        ]);
        Categery::create([
            'category_type' => 'Cash Flow',
            'slug' => 'Description-3'
        ]);
        Categery::create([
            'category_type' => 'Budget Management',
            'slug' => 'Description-4'
        ]);
        Categery::create([
            'category_type' => 'Expense Tracker',
            'slug' => 'Description-5'
        ]);
        Categery::create([
            'category_type' => 'Building Wealth',
            'slug' => 'Description-6'
        ]);
        Categery::create([
            'category_type' => 'Payoff',
            'slug' => 'Description-7'
        ]);
    }
}
