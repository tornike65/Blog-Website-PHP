<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert(['title' => 'home', 'href' => '/', 'created_at' => now(), 'updated_at' => now()]);
        DB::table('menus')->insert(['title' => 'about', 'href' => 'about', 'created_at' => now(), 'updated_at' => now()]);
        DB::table('menus')->insert(['title' => 'contact', 'href' => 'contact', 'created_at' => now(), 'updated_at' => now()]);
    }
}
