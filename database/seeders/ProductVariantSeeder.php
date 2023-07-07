<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductVariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($j=0;$j<10;$j++){
            for($i=0;$i<5;$i++){
                $product_variant[]=[
                    'product_id' => $j,
                    'size' => $i,
                    'color' => $i,
                    'quantity' => 10,
                ];
            }
        }
        DB::table('product_variant')->insert([$product_variant]);
    }
}
