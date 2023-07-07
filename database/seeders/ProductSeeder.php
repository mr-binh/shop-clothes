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
            for($i=0;$i<10;$i++){
                $product[]=[
                    'name' => 'product'.$i,
                    'slug' => 'product'.$i,
                    'description' => 'san pham thu '.$i,
                    'image' => 'image'.$i.'.jpg',
                    'price' => $i,
                    'status' => 0,
                    'hot' => 1,
                    'sold' => 0,
                ];
            }
        DB::table('product')->insert([$product]);
    }
}
