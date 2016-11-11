<?php

use Illuminate\Database\Seeder;

class SegmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('segments')->delete();
         
        DB::table('segments')->insert([
                "name" => "Dentista",
                "description" => "Lorem ipsum dolor sit amet",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('segments')->insert([
                "name" => "Clinico geral",
                "description" => "Lorem ipsum dolor sit amet",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('segments')->insert([
                "name" => "Ortopedista",
                "description" => "Lorem ipsum dolor sit amet",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('segments')->insert([
                "name" => "Oftalmologista",
                "description" => "Lorem ipsum dolor sit amet",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('segments')->insert([
                "name" => "Pediatra",
                "description" => "Lorem ipsum dolor sit amet",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('segments')->insert([
                "name" => "Otorrinolaringologista",
                "description" => "Lorem ipsum dolor sit amet",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('segments')->insert([
                "name" => "Urologista",
                "description" => "Lorem ipsum dolor sit amet",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('segments')->insert([
                "name" => "Ginecologista",
                "description" => "Lorem ipsum dolor sit amet",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('segments')->insert([
                "name" => "Cardiologista",
                "description" => "Lorem ipsum dolor sit amet",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
