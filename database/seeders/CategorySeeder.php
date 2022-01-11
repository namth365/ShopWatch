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
        $item->id = 1;
        $item->name = "Đồng hồ thời trang ADRIATICA";
        $item->banner = "Đồng Hồ";
        $item->parent_id = 1;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();
        $item = new Category;
        $item->id = 2;
        $item->name = "Đồng Hồ thời trang Casio";
        $item->banner = "Đồng Hồ";
        $item->parent_id = 1;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();
        $item = new Category;
        $item->id = 3;
        $item->name = "Đồng Hồ thời trang Bulova";
        $item->banner = "Đồng Hồ";
        $item->parent_id = 1;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();
        $item = new Category;
        $item->id = 4;
        $item->name = "Đồng Hồ thời trang Timex";
        $item->banner = "Đồng Hồ";
        $item->parent_id = 1;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();
        $item = new Category;
        $item->id = 5;
        $item->name = "Đồng Hồ thời trang Tommy Hilfiger";
        $item->banner = "Đồng Hồ";
        $item->parent_id = 1;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();
        $item = new Category;
        $item->id = 6;
        $item->name = "Đồng Hồ thời trang Elio";
        $item->banner = "Đồng Hồ";
        $item->parent_id = 1;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();
        $item = new Category;
        $item->id = 7;
        $item->name = "Đồng Hồ thời trang Coach";
        $item->banner = "Đồng Hồ";
        $item->parent_id = 1;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();
        $item = new Category;
        $item->id = 8;
        $item->name = "Đồng Hồ thời trang Citizen";
        $item->banner = "Đồng Hồ";
        $item->parent_id = 1;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();
        $item = new Category;
        $item->id = 9;
        $item->name = "Đồng Hồ Elle";
        $item->banner = "Đồng Hồ";
        $item->parent_id = 1;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();
        $item = new Category;
        $item->id = 10;
        $item->name = "Đồng Hồ thời trang Obaku";
        $item->banner = "Đồng Hồ";
        $item->parent_id = 1;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

    }
}
