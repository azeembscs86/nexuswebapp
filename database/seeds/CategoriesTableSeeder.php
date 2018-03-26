<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new \App\Categories([
            'cat_name'=>'Fashion',
            'created_at'=> date("Y-m-d H:i:s"),
            'updated_at'=> date("Y-m-d H:i:s")
            ]);        
        $category->save(); 
        $category = new \App\Categories([
            'cat_name'=>'Watches',
            'created_at'=> date("Y-m-d H:i:s"),
            'updated_at'=> date("Y-m-d H:i:s")
            ]);        
        $category->save();   
        $category = new \App\Categories([
            'cat_name'=>'Mens Jewelry',
            'created_at'=> date("Y-m-d H:i:s"),
            'updated_at'=> date("Y-m-d H:i:s")
            ]);        
        $category->save();   
       
        
    }
}
