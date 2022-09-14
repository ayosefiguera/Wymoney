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
