<?php

use Illuminate\Database\Seeder;

class ProfessionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('professions')->delete();
         
        DB::table('professions')->insert([
                "name" => "Vendedor",
                "description" => "Lorem ipsum dolor sit amet",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('professions')->insert([
                "name" => "Operador de caixa",
                "description" => "Lorem ipsum dolor sit amet",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('professions')->insert([
                "name" => "Gerente",
                "description" => "Lorem ipsum dolor sit amet",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('professions')->insert([
                "name" => "Telefonista",
                "description" => "Lorem ipsum dolor sit amet",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('professions')->insert([
                "name" => "Programador",
                "description" => "Lorem ipsum dolor sit amet",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('professions')->insert([
                "name" => "Eletricista",
                "description" => "Lorem ipsum dolor sit amet",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('professions')->insert([
                "name" => "Encanador",
                "description" => "Lorem ipsum dolor sit amet",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('professions')->insert([
                "name" => "Professor",
                "description" => "Lorem ipsum dolor sit amet",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('professions')->insert([
                "name" => "Analista de rede",
                "description" => "Lorem ipsum dolor sit amet",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
