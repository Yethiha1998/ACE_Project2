<?php

use Illuminate\Database\Seeder;

class carseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $today = date('Y-m-d H:i:s');
        DB::table('cars')->delete();
        $objs = array(
        ['car_id'=>'1','owner_id'=>'1','brand'=>'toyota','name'=>'belta','price'=>'111','car_no'=>'123234',
        'type'=>'saloon', 'status'=>'1','image1'=>'wrw3','image2'=>'wrw3','image3'=>'wrw3','created_at'=>$today]);
      
        DB::table('cars')->insert($objs);
    }
}
