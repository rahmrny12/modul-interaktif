<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

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
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('users')->truncate();
        DB::table('modules')->truncate();
        DB::table('categories')->truncate();

        $this->call([
            CategorySeeder::class,
            ModuleSeeder::class,
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Admin Modul Interaktif',
            'email' => 'admin@example.com',
        ]);
    }
}
