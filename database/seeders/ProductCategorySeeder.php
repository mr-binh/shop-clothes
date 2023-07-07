<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            for($i=0;$i<5;$i++){
                $product_category[]=[
                    'product_id' => $i,
                    'category_id' => $i,
                ];
            }
        DB::table('product_category')->insert([$product_category]);
    }
}
