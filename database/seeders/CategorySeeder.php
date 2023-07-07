<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category=[];
        for($i=0;$i<10;$i++){
            $category[]=[
                'name' => 'category'.$i,
                'description' => 'danh muc thu '.$i,
                'image' => 'image'.$i.'.jpg',
                'parent_id' => 0,
            ];
        }
        DB::table('category')->insert([
            $category
        ]);
    }
}
