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
         $this->call(CheesesSeeder::class);
         $this->call(PadsSeeder::class);
         $this->call(IngredientsSeeder::class);
         $this->call(RolesSeeder::class);

    }
}
