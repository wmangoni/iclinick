<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
	    $this->call(StateTableSeeder::class);
	    $this->call(CityTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ConveniosTableSeeder::class);
	    $this->call(ProfessionsTableSeeder::class);
        $this->call(SegmentsTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
    }
}
