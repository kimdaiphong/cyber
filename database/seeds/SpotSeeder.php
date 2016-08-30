<?php

use Illuminate\Database\Seeder;

class SpotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i=1; $i<30; $i++)
     	DB::table('spots')->insert([
            'status' => true
        ]);
    }
}
