<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('states')->delete();
        
        \DB::table('states')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Mato grosso',
                'initials' => 'MT'
            ),
        ));
    }
}
