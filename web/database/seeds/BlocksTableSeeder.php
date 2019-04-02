<?php

use Illuminate\Database\Seeder;

class BlocksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blocks')->insert([
            'name' => 'Header',
            'values' => ''
        ]);

        DB::table('blocks')->insert([
            'name' => 'Footer',
            'values' => ''
        ]);
    }
}
