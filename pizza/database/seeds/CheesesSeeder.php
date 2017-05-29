<?php

use App\models\DTCheeses;
use Illuminate\Database\Seeder;

class CheesesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cheese = [
            ["id" => "mocarella", "name" => "Mocarela", "calories" => 79],
            ["id" => "cheddar", "name" => "Čederis", "calories" => 123],
            ["id" => "swiss", "name" => "Šveicariškas", "calories" => 98]
        ];



        DB::beginTransaction();

        try {

            foreach($cheese as $single) {

                $record = DTCheeses::find($single['id']);

                if(!$record) {
                    DTCheeses::create($single);
                }

            }

        } catch (Exception $e) {

            DB::rollback();
            throw new Exception($e);

        }

        DB::commit();

    }
}
