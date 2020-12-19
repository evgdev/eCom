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
        DB::table('products')->insert([
        	[
        	'name'=>'Xiaomi mobile',
        	'price'=>'300',
        	'description'=>'Smartphone with 8gb and 2k resolution',
        	'category'=>'mobile',
        	'gallery'=>'https://avatars.mds.yandex.net/get-mpic/1866031/img_id1574970436732422383.jpeg/orig',
        	],
        	[
        	'name'=>'Panasonic TV',
        	'price'=>'400',
        	'description'=>'TV',
        	'category'=>'tv',
        	'gallery'=>'https://pisces.bbystatic.com/image2/BestBuy_US/images/products/4837/4837525_ra.jpg',
        	],
        	[
        	'name'=>'Sony TV',
        	'price'=>'560',
        	'description'=>'The Sony W650D LED TV has an average picture quality. It has good blacks when viewed in a dark room. Unfortunately, its screen uniformity has issues and the TV cannot get that bright. On top of that, when viewed from the side, its picture loses even more of its appeal.',
        	'category'=>'tv',
        	'gallery'=>'https://miro.medium.com/max/3000/1*1jGyq1udcEyR0kfMHjIbMg.jpeg'
        	]

        ]);
    }
}
