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
        $item->id = 10;
        $item->name = "Đồng Hồ Casio";
        $item->image = "banner-casio.jpg";
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Slider;
        $item->id = 11;
        $item->name = "Đồng Hồ Bulova";
        $item->image = "banner-BULOVA.jpg";
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Slider;
        $item->id = 12;
        $item->name = "Đồng Hồ Timex";
        $item->image = "banner-timex.jpg";
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();
    }
}
