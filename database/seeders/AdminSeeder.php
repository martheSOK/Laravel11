<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user1 = User::create([
            'nom' =>'TRAORE',
            'prenom' =>'jhon',
            'contact' =>'91215465',
            'status' =>'admin',
            'email' => 'admin@gmail.com',
            'password' =>'adminadmin'
        ]);

        $user1->assignRole('admin');

        $user2 = User::create([
            'nom' =>'SOKA',
            'prenom' =>'dissima',
            'contact' =>'92662850',
            'status' =>'user',
            'email' => 'dissima@gmail.com',
            'password' =>'dissi94##'
        ]);

        $user2->assignRole('user');
    }
}
