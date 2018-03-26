<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = new \App\Products([
            'category_id'=>1,
            'brand_id'=>1,
            'product_name'=>'Manicure & Pedicure',
            'product_price'=>150,
            'product_gender'=>'male',
            'product_size'=>'small',
            'product_color'=>'gray',
            'product_image'=>'assets/img/a.jpg',
            'product_description'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
            'created_at'=> date("Y-m-d H:i:s"),
            'updated_at'=> date("Y-m-d H:i:s")
            ]);        
        $products->save(); 
        $products = new \App\Products([
            'category_id'=>1,
            'brand_id'=>1,
            'product_name'=>'Manicure & Pedicure',
            'product_price'=>250,
            'product_gender'=>'male',
            'product_size'=>'medium',
            'product_color'=>'gray',
            'product_image'=>'assets/img/b.jpg',
            'product_description'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
            'created_at'=> date("Y-m-d H:i:s"),
            'updated_at'=> date("Y-m-d H:i:s")
            ]);        
        $products->save();
        $products = new \App\Products([
            'category_id'=>1,
            'brand_id'=>1,
            'product_name'=>'Manicure & Pedicure',
            'product_price'=>300,
            'product_gender'=>'male',
            'product_size'=>'large',
            'product_color'=>'gray',
            'product_image'=>'assets/img/c.jpg',
            'product_description'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
            'created_at'=> date("Y-m-d H:i:s"),
            'updated_at'=> date("Y-m-d H:i:s")
            ]);        
        $products->save();
        $products = new \App\Products([
            'category_id'=>1,
            'brand_id'=>1,
            'product_name'=>'Manicure & Pedicure',
            'product_price'=>150,
            'product_gender'=>'female',
            'product_size'=>'small',
            'product_color'=>'gold',
            'product_image'=>'assets/img/d.jpg',
            'product_description'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
            'created_at'=> date("Y-m-d H:i:s"),
            'updated_at'=> date("Y-m-d H:i:s")
            ]);        
        $products->save();
        $products = new \App\Products([
            'category_id'=>1,
            'brand_id'=>1,
            'product_name'=>'Manicure & Pedicure',
            'product_price'=>170,
            'product_gender'=>'female',
            'product_size'=>'medium',
            'product_color'=>'gold',
            'product_image'=>'assets/img/e.jpg',
            'product_description'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
            'created_at'=> date("Y-m-d H:i:s"),
            'updated_at'=> date("Y-m-d H:i:s")
            ]);        
        $products->save();
        $products = new \App\Products([
            'category_id'=>1,
            'brand_id'=>1,
            'product_name'=>'Manicure & Pedicure',
            'product_price'=>190,
            'product_gender'=>'male',
            'product_size'=>'large',
            'product_color'=>'gold',
            'product_image'=>'assets/img/f.jpg',
            'product_description'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
            'created_at'=> date("Y-m-d H:i:s"),
            'updated_at'=> date("Y-m-d H:i:s")
            ]);        
        $products->save();
        $products = new \App\Products([
            'category_id'=>1,
            'brand_id'=>1,
            'product_name'=>'Manicure & Pedicure',
            'product_price'=>160,
            'product_gender'=>'male',
            'product_size'=>'small',
            'product_color'=>'silver',
            'product_image'=>'assets/img/g.jpg',
            'product_description'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
            'created_at'=> date("Y-m-d H:i:s"),
            'updated_at'=> date("Y-m-d H:i:s")
            ]);        
        $products->save();
        $products = new \App\Products([
            'category_id'=>1,
            'brand_id'=>1,
            'product_name'=>'Manicure & Pedicure',
            'product_price'=>150,
            'product_gender'=>'male',
            'product_size'=>'medium',
            'product_color'=>'silver',
            'product_image'=>'assets/img/h.jpg',
            'product_description'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
            'created_at'=> date("Y-m-d H:i:s"),
            'updated_at'=> date("Y-m-d H:i:s")
            ]);        
        $products->save();
        $products = new \App\Products([
            'category_id'=>1,
            'brand_id'=>1,
            'product_name'=>'Manicure & Pedicure',
            'product_price'=>150,
            'product_gender'=>'male',
            'product_size'=>'large',
            'product_color'=>'silver',
            'product_image'=>'assets/img/i.jpg',
            'product_description'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
            'created_at'=> date("Y-m-d H:i:s"),
            'updated_at'=> date("Y-m-d H:i:s")
            ]);        
        $products->save();
    }
}
