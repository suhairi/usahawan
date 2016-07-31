<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	User::create([
            'name'      => 'Suhairi Abdul Hamid',
            'email'     => 'suhairi81@gmail.com',
            'password'  => Hash::make('suhairi'),
            'role'      => 'root',
        ]);

        User::create([
    		'name'		=> 'Clerk',
    		'email'		=> 'clerk@gmail.com',
    		'password'	=> Hash::make('clerk'),
    		'role'		=> 'clerk',
		]);        

        User::create([
            'name'      => 'IAT MADA',
            'email'     => 'iatmada@gmail.com',
            'password'  => Hash::make('mada1234'),
            'role'      => 'root',
        ]);   
    }
}
