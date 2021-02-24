<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(['title' => 'Book', 'created_at' => now(), 'updated_at' => now()]);
        DB::table('categories')->insert(['title' => 'Travel', 'created_at' => now(), 'updated_at' => now()]);
        DB::table('categories')->insert(['title' => 'Adventure', 'created_at' => now(), 'updated_at' => now()]);
        DB::table('categories')->insert(['title' => 'Lifestyle', 'created_at' => now(), 'updated_at' => now()]);
        DB::table('categories')->insert(['title' => 'Business', 'created_at' => now(), 'updated_at' => now()]);
    }
}
