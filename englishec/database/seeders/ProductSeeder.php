<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('products')->insert([
         	[
        	'name'=>'LG',
        	'price'=>'2250 P',
            'category'=>'mobile',
            'description'=>'smart 4G ram and more features', 
            'gallery'=>'https://www.91-img.com/gallery_images_uploads/0/e/0e939613f9ea10a4f3ac35c05c52b3fb1f25bddf.jpeg' 
         ],
         [
        	'name'=>'iphone 12 pro',
        	'price'=>'13150 P',
            'category'=>'mobile',
            'description'=>'Excellent OLED displayBlazing-fast performanceGood cameras', 
            'gallery'=>'https://static.hub.91mobiles.com/wp-content/uploads/2020/11/Apple-iPhone-12-Pro-Max-15.jpg'           
        ],
        [
        	'name'=>'Google pixl 4a',
        	'price'=>'2950 P',
            'category'=>'mobile',
            'description'=>'he refresh rate is a standard 60Hz, but it does look rather nice in terms of colour output', 
            'gallery'=>'https://static.hub.91mobiles.com/wp-content/uploads/2020/10/Google-Pixel-4a-02.jpg'           
        ],
        [
        	'name'=>'samsung Galaxy',
        	'price'=>'3250 P',
            'category'=>'mobile',
            'description'=>'Samsung occupies  Galaxy Note20 Ultra 5G', 
            'gallery'=>'https://static.hub.91mobiles.com/wp-content/uploads/2020/08/Samsung-Galaxy-Note20-Ultra-5G-44.jpg'           
        ]
    ]);
    }
}
