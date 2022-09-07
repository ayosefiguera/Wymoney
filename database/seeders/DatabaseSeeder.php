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
        \App\Models\Category::factory(5)->create();
        \App\Models\Transaction::factory(15)->create();
        \App\Models\Account::factory()->create([
            'name' => 'Main',
            'iban' => 'ES0060000000000001',
            'is_active' => true
        ]);
    }
}
