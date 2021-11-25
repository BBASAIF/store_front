<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=>'LG Mobile',
                "price"=>"200",
                "description"=>"A smartphone with 4GB RAM and much more features.",
                'Category'=>'Mobile',
                "gallery"=>"https://fdn.gsmarena.com/imgroot/news/21/01/lg-in-talks-with-vietnamese-conglomerate-to-sell/-1200w5/gsmarena_000.jpg"
            ],[
                'name'=>'Samsung Mobile',
                "price"=>"400",
                "description"=>"A smartphone with 8GB RAM and much more features.",
                'Category'=>'Mobile',
                "gallery"=>"https://www.xda-developers.com/files/2020/08/samsung-galaxy-note-20-ultra-review-featured-1-1024x640.jpg"
            ],[
                'name'=>'Sony Mobile',
                "price"=>"300",
                "description"=>"A smartphone with 6GB RAM and much more features.",
                'Category'=>'Mobile',
                "gallery"=>"https://fdn.gsmarena.com/imgroot/news/21/10/sony-mobile-increase-q2-2021/-1200w1/gsmarena_000.jpg"
            ],[
                'name'=>'Xiomi Mobile',
                "price"=>"300",
                "description"=>"A smartphone with 6GB RAM and much more features.",
                'Category'=>'Mobile',
                "gallery"=>"https://cdn.mos.cms.futurecdn.net/ZpQSZtJ7XcfhFMLiiRd3rj-1200-80.jpg"
            ]
        ]);
    }
}
