<?php

use Illuminate\Database\Seeder;

class StateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('state')->delete();
         
		DB::table('state')->insert([
			"name" => "Acre",
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		]);

		DB::table('state')->insert([
			"name" => "Alagoas",
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		]);

		DB::table('state')->insert([
			"name" => "Amazonas",
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		]);

		DB::table('state')->insert([
			"name" => "Amapá",
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		]);

		DB::table('state')->insert([
			"name" => "Bahia",
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		]);

		DB::table('state')->insert([
			"name" => "Ceará",
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		]);

		DB::table('state')->insert([
			"name" => "Distrito Federal",
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		]);

		DB::table('state')->insert([
			"name" => "Espírito Santo",
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		]);

		DB::table('state')->insert([
			"name" => "Goiás",
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		]);

		DB::table('state')->insert([
			"name" => "Maranhão",
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		]);

		DB::table('state')->insert([
			"name" => "Minas Gerais",
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		]);

		DB::table('state')->insert([
			"name" => "Mato Grosso do Sul",
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		]);

		DB::table('state')->insert([
			"name" => "Mato Grosso",
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		]);

		DB::table('state')->insert([
			"name" => "Pará",
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		]);

		DB::table('state')->insert([
			"name" => "Paraíba",
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		]);

		DB::table('state')->insert([
			"name" => "Pernambuco",
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		]);

		DB::table('state')->insert([
			"name" => "Piauí",
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		]);

		DB::table('state')->insert([
			"name" => "Paraná",
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		]);

		DB::table('state')->insert([
			"name" => "Rio de Janeiro",
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		]);

		DB::table('state')->insert([
			"name" => "Rio Grande do Norte",
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		]);

		DB::table('state')->insert([
			"name" => "Rondônia",
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		]);

		DB::table('state')->insert([
			"name" => "Roraima",
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		]);

		DB::table('state')->insert([
			"name" => "Rio Grande do Sul",
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		]);

		DB::table('state')->insert([
			"name" => "Santa Catarina",
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		]);

		DB::table('state')->insert([
			"name" => "Sergipe",
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		]);

		DB::table('state')->insert([
			"name" => "São Paulo",
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		]);

		DB::table('state')->insert([
			"name" => "Tocantins",
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		]);
    }
}
