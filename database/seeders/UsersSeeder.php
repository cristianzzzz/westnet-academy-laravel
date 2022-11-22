<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Super Admin',
            'email' => 'admin@westnet.com.ar',
            'password' => Hash::make('asdqwe!"#'),
        ]);
        DB::table('users')->insert([
            'name' => 'Charles Xavier',
            'email' => 'profesorxavier@westnet.com.ar',
            'password' => Hash::make('asdqwe!"#'),
        ]);
        DB::table('users')->insert([
            'name' => 'Erik Lehnsherr',
            'email' => 'magneto@westnet.com.ar',
            'password' => Hash::make('asdqwe!"#'),
        ]);
        DB::table('users')->insert([
            'name' => 'Scott Summers',
            'email' => 'ciclope@westnet.com.ar',
            'password' => Hash::make('asdqwe!"#'),
        ]);
        DB::table('users')->insert([
            'name' => 'Raven Darkhölme',
            'email' => 'mistique@westnet.com.ar',
            'password' => Hash::make('asdqwe!"#'),
        ]);
        DB::table('users')->insert([
            'name' => 'Anna Marie',
            'email' => 'titania@westnet.com.ar',
            'password' => Hash::make('asdqwe!"#'),
        ]);
        DB::table('users')->insert([
            'name' => 'Hank McCoy',
            'email' => 'bestia@westnet.com.ar',
            'password' => Hash::make('asdqwe!"#'),
        ]);
        DB::table('users')->insert([
            'name' => 'Jean Grey',
            'email' => 'fenix@westnet.com.ar',
            'password' => Hash::make('asdqwe!"#'),
        ]);
        DB::table('users')->insert([
            'name' => 'Ororo Munroe',
            'email' => 'tormenta@westnet.com.ar',
            'password' => Hash::make('asdqwe!"#'),
        ]);
    }
}