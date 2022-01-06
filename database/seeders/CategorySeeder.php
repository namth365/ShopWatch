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
        $item->name = "Đồng Hồ Treo Tường";
        $item->banner = "Đồng Hồ";
        $item->parent_id = 1;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Category;
        $item->id = 2;
        $item->name = "Đồng Hồ";
        $item->banner = "Đồng Hồ";
        $item->parent_id = 1;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Category;
        $item->id = 3;
        $item->name = "Đồng Hồ Đeo Tay";
        $item->banner = "Đồng Hồ";
        $item->parent_id = 1;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Category;
        $item->id = 4;
        $item->name = "Đồng Hồ Bàn";
        $item->banner = "Đồng Hồ";
        $item->parent_id = 1;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();
    }
}
