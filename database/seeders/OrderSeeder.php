<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = new Order;
        $item->id = 1;
        $item->name = "A";
        $item->email = "aa@gmail.com";
        $item->address = "123 AA";
        $item->phone = "123456";
        $item->gender = "Nam";
        $item->total = "1000";
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Order;
        $item->id = 2;
        $item->name = "B";
        $item->email = "bb@gmail.com";
        $item->address = "123 AA";
        $item->phone = "1234563";
        $item->gender = "Nam";
        $item->total = "1000";
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Order;
        $item->id = 3;
        $item->name = "C";
        $item->email = "cc@gmail.com";
        $item->address = "123 AA";
        $item->phone = "1232456";
        $item->gender = "Nam";
        $item->total = "1000";
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();
    }
}
