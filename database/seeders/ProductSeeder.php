<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = new Product;
        $item->id = 1;
        $item->name = "Đồng Hồ Treo Tường 123";
        $item->image = "https://thapxanh.com/images/thumbs/0013373_dong-ho-nu-carotif-f-1008l-dong-ho-kham-da-dong-ho-co-sang-trong-dong-ho-lo-may_550.jpg";
        $item->price = "100";
        $item->quantily = "10";
        $item->status = "1";
        $item->supplier = "ACC";
        $item->description = "Đồng Hồ";
        $item->category_id = 1;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Product;
        $item->id = 2;
        $item->name = "Đồng Hồ Treo Tường 123";
        $item->image = "add.jpg";
        $item->price = "100";
        $item->quantily = "10";
        $item->status = "1";
        $item->supplier = "ACC";
        $item->description = "Đồng Hồ";
        $item->category_id = 2;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Product;
        $item->id = 3;
        $item->name = "Đồng Hồ Treo Tường 123";
        $item->image = "add.jpg";
        $item->price = "100";
        $item->quantily = "10";
        $item->status = "1";
        $item->supplier = "ACC";
        $item->description = "Đồng Hồ";
        $item->category_id = 3;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Product;
        $item->id = 4;
        $item->name = "Đồng Hồ Treo Tường 123";
        $item->image = "add.jpg";
        $item->price = "100";
        $item->quantily = "10";
        $item->status = "1";
        $item->supplier = "ACC";
        $item->description = "Đồng Hồ";
        $item->category_id = 1;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Product;
        $item->id = 5;
        $item->name = "Đồng Hồ Treo Tường 123";
        $item->image = "add.jpg";
        $item->price = "100";
        $item->quantily = "10";
        $item->status = "1";
        $item->supplier = "ACC";
        $item->description = "Đồng Hồ";
        $item->category_id = 2;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();
    }
}
