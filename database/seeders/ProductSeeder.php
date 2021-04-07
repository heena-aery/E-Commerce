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
        DB::table('products')->insert
        ([
            'name'=>'EAirtech TV',
            'price'=>'28000',
            'category'=>'TV',
            'description'=>'SmartTV with much more features',
            'gallery'=>'https://images-na.ssl-images-amazon.com/images/I/81t2A6uhm4L._SL1500_.jpg',


        ]) ; 
    }
}
