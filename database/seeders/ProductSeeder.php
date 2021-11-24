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
            "name"=>"LG Mobile",
            "price"=>"200",
            "description"=>"this is a smartphone . it  is very usefull for all the people",
            "category"=>" mobile",
            "gallery"=>"https://www.lg.com/in/images/mobile-phones/md07523361/LMK610IM-350.jpg"
            ],
            [
                "name"=>"samssung pavilliuon",
            "price"=>"980",
            "description"=>"this is a smartphone . it  is very usefull for all the people",
            "category"=>"laptop",
            "gallery"=>"https://www.lg.com/in/images/mobile-phones/md07523361/LMK610IM-350.jpg"
            ],
            [
                "name"=>"oppo Mobile",
            "price"=>"450",
            "description"=>"this is a oppp smartphone . it  is very usefull for all the people. is has 8gb ram and 16 gb storage",
            "category"=>"mobile",
            "gallery"=>"https://www.lg.com/in/images/mobile-phones/md07523361/LMK610IM-350.jpg"
            ],
            [
                "name"=>"samsung Mobile",
            "price"=>"700",
            "description"=>" it  is very usefull for all the people . 32 gb ram amd 256 gb storage",
            "category"=>"mobile",
            "gallery"=>"https://www.lg.com/in/images/mobile-phones/md07523361/LMK610IM-350.jpg"
            ]
            
        ]);
    }
}
