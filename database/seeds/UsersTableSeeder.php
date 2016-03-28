<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        User::create(array(
            'name' => 'Kabir',
            'email' => 'kabir.pust@gmail.com',
            'password' => Hash::make('kabirbd'),
            'admin' => '1'
        ));
        User::crate(array(
            'name' => 'Hossain',
            'email' => 'kabir@gmail.com',
            'password' => Hash::make('kabirbd'),
            'admin' => '1'            
        ));
    }
}
