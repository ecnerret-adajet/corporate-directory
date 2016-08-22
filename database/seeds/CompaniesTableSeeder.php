<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('companies')->insert([
          array('name'=>'PFMC-LUZ'),
          array('name'=>'PFMC-VIS'),
          array('name'=>'LFUG-LUZ'),
          array('name'=>'LFUG-VIS'),
          array('name'=>'ALC-LUZ'),
          array('name'=>'ALC-VIS'),
          array('name'=>'PLILI'),
          array('name'=>'AGRISOL'),
          array('name'=>'MGPCI-BUK'),
          array('name'=>'MGPCI-ISA'),
          array('name'=>'ATH'),
          array('name'=>'GLOBAL'),
          array('name'=>'AAIDC'),
          array('name'=>'EXCEL-FARM'),
          array('name'=>'MGC')
         
        ]);
    }
}
