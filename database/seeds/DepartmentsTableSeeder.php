<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('departments')->insert([
          array('name'=>'FLOUR MILL'),
          array('name'=>'FINANCE'),
          array('name'=>'TQM'),
          array('name'=>'TRADE FEEDS'),
          array('name'=>'IT DEPT'),
          array('name'=>'QUALITY ASSURANCE'),
          array('name'=>'FEED MILL'),
          array('name'=>'ENGINEERING'),
          array('name'=>'CORN MILL'),
          array('name'=>'NUTRITION'),
          array('name'=>'ADMINISTRATION'),
          array('name'=>'R&D'),
          array('name'=>'TRADE FLOUR'),
          array('name'=>'HUMAN RESOURCE'),
          array('name'=>'CPU DEPT'),
          array('name'=>'QC DEPT'),
         
             
          
         
        ]);
    }
}
