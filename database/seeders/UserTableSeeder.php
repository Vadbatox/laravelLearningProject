<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();



        User::create([
            "name"=> "Vad Batomene",
            "email"=> "batomenevad7@gmail.com",
            "password"=> bcrypt("batox1205")]);
        User::create( [
            "name"=>"Yvanie",
            "email"=> "yvanie@gmail.com",
            "password"=> bcrypt("1234yva")
        ]);


        User::create([
                "name"=>"Jean Mbiya",
                "email"=> "Letecode@gmail.com",
                "password"=> bcrypt("1234jcmbiya")
            ]);

        User::create( [
                "name"=>"Rabin",
                "email"=> "Rabin@gmail.com",
                "password"=> bcrypt("1234jcmbiya")
        ]);
        User::create( [
                "name"=>"Joseph Kabila",
                "email"=> "kabila@gmail.com",
                "password"=> bcrypt("1234Rais")
            ]
        );


    }

    
}