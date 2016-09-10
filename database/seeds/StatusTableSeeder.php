<?php

use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           DB::table('companies')->insert([
          array('name'=>'Resigned'),
          array('name'=>'Retired'),
         
        ]);
    }
}
