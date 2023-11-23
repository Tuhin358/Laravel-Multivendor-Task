<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users=[
            ['id'=>'1','name'=>'Superadmin','email'=>'superadmin@gmail.com','password' => Hash::make('password'),
            'remember_token' => Str::random(10),'role'=>'1'],
            ['id'=>'2','name'=>'Admin','email'=>'admin@gmail.com','password'=>Hash::make('password'),
            'remember_token' => Str::random(10),'role'=>'2'],

        ];
        User::insert($users);
    }
}
