<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
        public function run(): void
        {
            $userdata =[
                [
                    "name"=> "mas admin",
                    "email"=> "Admin@gmail.com",
                    "role"=>"admin",
                    "password"=> bcrypt("1234567"),
                ],
                [
                    "name"=> "mas author",
                    "email"=> "author@gmail.com",
                    "role"=>"author",
                    "password"=> bcrypt("1234567"),
                ],
                [
                    "name"=> "mas Subscriber",
                    "email"=> "subscriberng@gmail.com",
                    "role"=>"subscriber",
                    "password"=> bcrypt("1234567"),
                ],
        
            ];
            foreach ($userdata as $key => $value) {
                User::create($value);
            }
        }
    }
    

