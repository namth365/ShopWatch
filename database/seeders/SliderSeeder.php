<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Slider;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = new Slider;
        $item->id = 1;
        $item->name = "Đồng Hồ Treo Tường";
        $item->image = "dong-ho-co-la-gi-cac-kien-thuc-co-ban-ve-dong-ho-may-co-la-gi-breguet-minute-repeater-011.jpg";
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Slider;
        $item->id = 2;
        $item->name = "Đồng Hồ Treo Tường";
        $item->image = "anh-dong-ho-co_042011070.jpg";
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Slider;
        $item->id = 3;
        $item->name = "Đồng Hồ Treo Tường";
        $item->image = "thi-truong-dong-ho-viet-nam-thumbnail-1-scaled.jpg";
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();
    }
}
