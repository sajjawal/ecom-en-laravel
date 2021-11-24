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
            "gallery"=>"https://images.unsplash.com/photo-1584438784894-089d6a62b8fa?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
            ],
            [
                "name"=>"samssung pavilliuon",
            "price"=>"980",
            "description"=>"this is a smartphone . it  is very usefull for all the people",
            "category"=>"laptop",
            "gallery"=>"https://images.unsplash.com/photo-1592890288564-76628a30a657?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
            ],
            [
                "name"=>"oppo Mobile",
            "price"=>"450",
            "description"=>"this is a oppp smartphone . it  is very usefull for all the people. is has 8gb ram and 16 gb storage",
            "category"=>"mobile",
            "gallery"=>"https://images.unsplash.com/photo-1613290907219-ee677464bd45?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
            ],
            [
                "name"=>"LG Mobile",
                "price"=>"200",
                "description"=>"this is a smartphone . it  is very usefull for all the people",
                "category"=>" mobile",
                "gallery"=>"https://images.unsplash.com/photo-1584438784894-089d6a62b8fa?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
             ],
            [
                "name"=>"samsung Mobile",
            "price"=>"700",
            "description"=>" it  is very usefull for all the people . 32 gb ram amd 256 gb storage",
            "category"=>"mobile",
            "gallery"=>"https://images.unsplash.com/photo-1613290907219-ee677464bd45?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
            ]
            
        ]);
    }
}
