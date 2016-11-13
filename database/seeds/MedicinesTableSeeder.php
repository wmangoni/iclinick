<?php

use Illuminate\Database\Seeder;

class MedicinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medicines')->delete();

        DB::table('medicines')->insert([
            "name" => "Paracetamol",
            "description" => "Lorem ipsum dolor sit amet",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('medicines')->insert([
            "name" => "Dorflex",
            "description" => "Lorem ipsum dolor sit amet",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('medicines')->insert([
            "name" => "Ibuprofeno",
            "description" => "Lorem ipsum dolor sit amet",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('medicines')->insert([
            "name" => "Metilenol",
            "description" => "Lorem ipsum dolor sit amet",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
