<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('products_')->insert([
            // 'name' => "LG mobile",
            // 'price' => "10000",
            // "description" => "A smart Phone 8Gb RAM",
            // "category" => "Mobile",
            // "galary" => "https://i.gadgets360cdn.com/products/large/lg-wing-1-800x800-1600148741.jpg"
            // 'name' => "Samsung mobile",
            // 'price' => "22000",
            // "description" => "S9 plus 8Gb RAM",
            // "category" => "Mobile",
            // "galary" => "https://static.digit.in/default/d4d1545f7eb27c816672023883632a74199ee822.jpeg"
            [
                'name' => "OnePlus mobile",
                'price' => "42000",
                "description" => "9R 8Gb RAM",
                "category" => "Mobile",
                "galary" => "https://images.indianexpress.com/2021/04/one-plus-1200.jpg" 
            ],
            [
                'name' => "Realme mobile",
                'price' => "12000",
                "description" => "Realme 8 8Gb RAM",
                "category" => "Mobile",
                "galary" => "https://piunikaweb.com/wp-content/uploads/2020/03/Realme-6-Pro-1.jpg" 
            ],
            [
                'name' => "Oppo mobile",
                'price' => "22000",
                "description" => "Oppo 12Gb RAM",
                "category" => "Mobile",
                "galary" => "https://thumbs.dreamstime.com/z/oppo-mobile-phone-company-people-visit-oppo-mobile-phone-shop-bukit-bintang-kuala-lumpur-malaysia-133848891.jpg" 
            ],
            
            [
                'name' => "Vivo mobile",
                'price' => "11000",
                "description" => "V5 8Gb RAM & 12GB",
                "category" => "Mobile",
                "galary" => "https://static.digit.in/default/d4d1545f7eb27c816672023883632a74199ee822.jpeg" 
            ],

            [
                'name' => "Panisonic TV",
                'price' => "22000",
                "description" => "A LED Panasonic Tv Hd Quality picture ",
                "category" => "Tv",
                "galary" => "https://i.gadgets360cdn.com/products/televisions/large/1548154708_832_panasonic_42-inch-plasma-hd-tv-th-p42x30d.jpg" 
            ],
            
            [
                'name' => "Sony Tv",
                'price' => "27000",
                "description" => "A Smart TV  in ultra hd Ultra hd ",
                "category" => "Tv",
                "galary" => "hhttps://m.media-amazon.com/images/I/81zeKI1IG9L._SL1500_.jpg" 
            ]

        ]);
    }
}
