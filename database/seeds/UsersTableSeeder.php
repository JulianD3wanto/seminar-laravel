<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('users')->insert([
            [
            	'name' => 'Admin',
            	'email' => 'admin@gmail.com',
            	'password' => bcrypt('Admin'),
                'created_at' => Carbon::now(),
            ],
            [
            	'name' => 'Aufa',
            	'email' => 'aufa@gmail.com',
            	'password' => bcrypt('AufaAufa'),
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Billah',
                'email' => 'billah@gmail.com',
                'password' => bcrypt('BillahBillah'),
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Saya',
                'email' => 'saya@gmail.com',
                'password' => bcrypt('SayaSaya'),
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Kamu',
                'email' => 'kamu@gmail.com',
                'password' => bcrypt('KamuKamu'),
                'created_at' => Carbon::now(),
            ],
        ]);
    }
}
