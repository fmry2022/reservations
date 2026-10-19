<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\carbon;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Vider la table

        User::truncate();

        // Les données
        $users= [
              [
                'login' => 'bob',
                'firstname' => 'Bob',
                'lastname' => 'Sull',
                'email' => 'bob@sull.com',
                'password' => '12345678',
                'langue' => 'fr',
                'role' => 'admin',
            ],
            [
                'login' => 'anna',
                'firstname' => 'Anna',
                'lastname' => 'Lyse',
                'email' => 'anna.lyse@sull.com',
                'password' => '12345678',
                'langue' => 'en',
                'role' => 'member',
            ],
        ];

        // Compléter chaque utilisateur
        foreach ($users as &$user){
            $user['email_verified_at'] = Carbon::now();
            $user['created_at'] = Carbon::now();
            $user['password'] = Hash::make($user['password']);
            $user['remember_token'] = Str::random(10);
        }

        // Insérer dans la table
        DB::table('users')->insert($users);
    }
}
