<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create();
        \App\Models\Account::factory()->create([
            'name' => 'Main',
            'iban' => 'ES0060000000000001',
            'balance' => 3200.25,
            'is_active' => true
        ]);
        \App\Models\Account::factory()->create([
            'name' => 'PiggyBank',
            'iban' => 'ES0060000000000002',
            'balance' => 1200.50,
            'is_active' => true
        ]);
        \App\Models\Account::factory()->create([
            'name' => 'Goals',
            'iban' => 'ES0060000000000003',
            'balance' => 6500.00,
            'is_active' => true
        ]);
        \App\Models\Category::create(
            ['name' => 'need',
            'description' => 'need']
        );
        \App\Models\Category::create(
            ['name' => 'wants',
            'description' => 'wants']
        );
        \App\Models\Category::create(
            ['name' => 'culture',
            'description' => 'culture']
        );
        
        \App\Models\Transaction::factory(15)->create();
    }
}
