<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
            'title' => 'Home Page',
            'url' => 'index',
            'public' => true
        ]);

        DB::table('pages')->insert([
            'title' => 'Blank Page',
            'url' => '_blank',
            'public' => false
        ]);
    }
}
