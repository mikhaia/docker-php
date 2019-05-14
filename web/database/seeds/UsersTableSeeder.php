<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Alexandr Mikhailov',
            'group' => 1,
            'email' => 'chronokz@yandex.kz',
            'password' => bcrypt('CMSPassword'),
        ]);
    }
}
