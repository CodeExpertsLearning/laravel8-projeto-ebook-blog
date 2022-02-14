<?php

namespace Database\Seeders;

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
        // \DB::table('users')->insert([
        //     'name'     => 'Primeiro Usuário',
        //     'email'    => 'email@email.com',
        //     'password' => bcrypt('secret')
        // ]); 
        \App\Models\User::factory(10)->create();
    }
}
