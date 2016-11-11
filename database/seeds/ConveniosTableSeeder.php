<?php

use Illuminate\Database\Seeder;

class ConveniosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('convenios')->delete();
         
        DB::table('convenios')->insert([
                "name" => "Unimed",
                "description" => "Lorem ipsum dolor sit amet",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('convenios')->insert([
                "name" => "Bradesco",
                "description" => "Lorem ipsum dolor sit amet",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('convenios')->insert([
                "name" => "Porto Alegre Clinicas",
                "description" => "Lorem ipsum dolor sit amet",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('convenios')->insert([
                "name" => "Centro Clinico Gaúcho",
                "description" => "Lorem ipsum dolor sit amet",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('convenios')->insert([
                "name" => "Sulamérica",
                "description" => "Lorem ipsum dolor sit amet",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('convenios')->insert([
                "name" => "Marítma",
                "description" => "Lorem ipsum dolor sit amet",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
        ]);
        
    }
}
