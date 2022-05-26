<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CreateProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i = 1; $i < 1001; $i++) {
            DB::table('products')->insert([
                "pro_name" => "Sản phẩm số " . $i,
                "pro_name_slug" => "san-pham-so-" . $i,
                "pro_category_id" => 1,
                "pro_price" => 100 * $i,
                "pro_author_id" => null,
                "pro_sale" => 10,
                "pro_status" => 1,
                "pro_hot" => 0,
                "pro_description" => "Đây là sản phẩm số " . $i,
                "pro_content" => "<p>Sản phẩm này là sản phẩm số " . $i . "</p>",
                "pro_image" => null,
                "pro_pay" => 0,
                "pro_number" => 0,
                "pro_number_of_reviewers" => $i,
                "pro_total_star" => 0,
            ]);
        }
    }
}
