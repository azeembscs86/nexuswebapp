<?php

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = new \App\Brands([
            'brand_name'=>'Cambridge',
            'brand_image'=>'assets/rands/amobile-logopng.jpg',
            'created_at'=> date("Y-m-d H:i:s"),
            'updated_at'=> date("Y-m-d H:i:s")
            ]);        
        $brands->save(); 
        
        $brands = new \App\Brands([
            'brand_name'=>'Gul Ahmed',
            'brand_image'=>'assets/rands/GulAhmed_logo_black.jpg',
            'created_at'=> date("Y-m-d H:i:s"),
            'updated_at'=> date("Y-m-d H:i:s")
            ]);        
        $brands->save(); 
    }
}
