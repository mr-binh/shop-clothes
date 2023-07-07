<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            for($i=0;$i<5;$i++){
                $attribute[]=[
                    'attribute_type' => 'attribute_type'.$i,
                    'attribute_value' => 'attribute_value'.$i,
                ];
            }
        DB::table('attribute')->insert([$attribute]);
    }
}
