<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CreateCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('categories')->insert([
            'id' => 1,
            'c_name' => 'Danh mục 1',
            'c_name_slug' => 'danh-muc-1',
            'c_status' => '1',
        ]);
    }
}
