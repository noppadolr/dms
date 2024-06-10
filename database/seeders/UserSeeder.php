<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            ['name' =>'นพดล ริยะสาร',
                'username' =>'admin',
                'phone' =>'0818884561',
                'status'=>1,
                'email' => 'admin@gmail.com',
                'password' => Hash::make('111'),
                'email_verified_at'=>Carbon::now(),
                'created_at'=>Carbon::now(),
            ],  
            [
                'name' =>'User',
                'username' =>'user',
                'phone' =>'0818884561',
                'status'=>1,
                'email' => 'user@gmail.com',
                'password' => Hash::make('111'),
                'email_verified_at'=>Carbon::now(),
                'created_at'=>Carbon::now(),
            ]
        ]);
    }
}
