<?php

use App\models\DTIngredients;
use Illuminate\Database\Seeder;

class IngredientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ingredients = [

            ["id" => "kumpis", "name" => "Kumpis", "calories" => 24],
            ["id" => "salami", "name" => "Salami", "calories" => 35],
            ["id" => "pievagrybiai", "name" => "Pievagrybiai", "calories" => 15],
            ["id" => "alyvuoges", "name" => "Alyvuogės", "calories" => 20],
            ["id" => "konservuoti_svoguneliai", "name" => "Konservuoti svogūnėliai", "calories" => 27],
            ["id" => "aitriosios_paprikos", "name" => "Aitriosios paprikos", "calories" => 20],
            ["id" => "marinuoti_agurkeliai", "name" => "Marinuoti agurkėliai", "calories" => 19],
            ["id" => "sviezios_paprikos", "name" => "Šviežios paprikos", "calories" => 33],
            ["id" => "konservuoti_ananasai", "name" => "Konservuoti ananasai", "calories" => 26],
            ["id" => "vistiena", "name" => "Vištiena", "calories" => 19],
            ["id" => "tunas", "name" => "Tunas", "calories" => 33],
            ["id" => "sonine", "name" => "Šoninė", "calories" => 29],
            ["id" => "malta_kiauliena", "name" => "Malta kiauliena", "calories" => 39],
            ["id" => "svogunai", "name" => "Svogūnai", "calories" => 15],
            ["id" => "sauleje", "name" => "Saulėje džiovinti pomidorai", "calories" => 19],

        ];


        DB::beginTransaction();

        try {

            foreach($ingredients as $single) {

                $record = DTIngredients::find($single['id']);

                if(!$record) {
                    DTIngredients::create($single);
                }

            }

        } catch (Exception $e) {

            DB::rollback();
            throw new Exception($e);

        }

        DB::commit();



    }
}
