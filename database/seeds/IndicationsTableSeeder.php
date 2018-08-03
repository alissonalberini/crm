<?php

use Illuminate\Database\Seeder;

class IndicationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Indication::class, 20)->create()->each(function ($c) {
        });
    }
}
