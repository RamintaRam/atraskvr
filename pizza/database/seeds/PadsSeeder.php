<?php

use App\models\DTPads;
use Illuminate\Database\Seeder;

class PadsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pads = [
            ["id" => "pilno_grudo", "name" => "pilno grūdo miltų", "calories" => 197],
            ["id" => "mielinis", "name" => "mielinis picos padas", "calories" => 378]
        ];


        DB::beginTransaction();

        try {

            foreach ($pads as $single) {

                $record = DTPads::find($single['id']);

                if(!$record) {
                    DTPads::create($single);
                }

            }

        } catch(Exception $e) {

            DB::rollback();
            throw new Exception($e);

        }

        DB::commit();


    }
}
