<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('cities')->delete();
        
        \DB::table('cities')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Cuiabá',
                'state_id' => 1
            ),
        ));
    }
}
