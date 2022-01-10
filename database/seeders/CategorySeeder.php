<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = new Category;
        $item->id = 10;
        $item->name = "Đồng hồ thời trang ADRIATICA";
        $item->banner = "Đồng Hồ";
        $item->parent_id = 1;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Category;
        $item->id = 11;
        $item->name = "Đồng Hồ thời trang Casio";
        $item->banner = "Đồng Hồ";
        $item->parent_id = 1;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Category;
        $item->id = 12;
        $item->name = "Đồng Hồ thời trang Bulova";
        $item->banner = "Đồng Hồ";
        $item->parent_id = 1;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Category;
        $item->id = 13;
        $item->name = "Đồng Hồ thời trang Timex";
        $item->banner = "Đồng Hồ";
        $item->parent_id = 1;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Category;
        $item->id = 14;
        $item->name = "Đồng Hồ thời trang Tommy Hilfiger";
        $item->banner = "Đồng Hồ";
        $item->parent_id = 1;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Category;
        $item->id = 15;
        $item->name = "Đồng Hồ thời trang Elio";
        $item->banner = "Đồng Hồ";
        $item->parent_id = 1;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Category;
        $item->id = 16;
        $item->name = "Đồng Hồ thời trang Coach";
        $item->banner = "Đồng Hồ";
        $item->parent_id = 1;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Category;
        $item->id = 17;
        $item->name = "Đồng Hồ thời trang Citizen";
        $item->banner = "Đồng Hồ";
        $item->parent_id = 1;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Category;
        $item->id = 18;
        $item->name = "Đồng Hồ Elle";
        $item->banner = "Đồng Hồ";
        $item->parent_id = 1;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Category;
        $item->id = 19;
        $item->name = "Đồng Hồ thời trang Obaku";
        $item->banner = "Đồng Hồ";
        $item->parent_id = 1;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

    }
}
