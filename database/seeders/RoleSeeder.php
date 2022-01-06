<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = new Role;
        $item->id = 1;
        $item->name = "Đồng Hồ Treo Tường";
        $item->display_name = "Đồng Hồ";
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Role;
        $item->id = 2;
        $item->name = "Đồng Hồ Bàn";
        $item->display_name = "Đồng Hồ";
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Role;
        $item->id = 3;
        $item->name = "Đồng Hồ Đeo Tay";
        $item->display_name = "Đồng Hồ";
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();
    }
}
