<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->delete();

        DB::table('services')->insert([
            "name" => "Consulta",
            "description" => "Lorem ipsum dolor sit amet",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('services')->insert([
            "name" => "Exame de sangue",
            "description" => "Lorem ipsum dolor sit amet",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('services')->insert([
            "name" => "Exame de urina",
            "description" => "Lorem ipsum dolor sit amet",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('services')->insert([
            "name" => "Exame de fezes",
            "description" => "Lorem ipsum dolor sit amet",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('services')->insert([
            "name" => "Raio X",
            "description" => "Lorem ipsum dolor sit amet",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('services')->insert([
            "name" => "Endoscopia",
            "description" => "Lorem ipsum dolor sit amet",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('services')->insert([
            "name" => "Tomografia",
            "description" => "Lorem ipsum dolor sit amet",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('services')->insert([
            "name" => "Ecografia",
            "description" => "Lorem ipsum dolor sit amet",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('services')->insert([
            "name" => "Mamografia",
            "description" => "Lorem ipsum dolor sit amet",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('services')->insert([
            "name" => "Rinoplastia",
            "description" => "Lorem ipsum dolor sit amet",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('services')->insert([
            "name" => "Cantoplastia",
            "description" => "Lorem ipsum dolor sit amet",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('services')->insert([
            "name" => "Mamoplastia",
            "description" => "Lorem ipsum dolor sit amet",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('services')->insert([
            "name" => "Cesárea",
            "description" => "Lorem ipsum dolor sit amet",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
