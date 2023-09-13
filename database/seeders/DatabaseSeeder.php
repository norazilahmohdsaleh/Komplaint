<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this ->call([
            ActionStatusSeeder::class
        ]);

        \App\Models\Complaint::factory(500)->create();
        \App\Models\Action::factory(1000)->create();

        \App\Models\User::factory()->create([
            'name' => 'user',
            'email' => 'user@domain.com',
        ]);
    }
}
