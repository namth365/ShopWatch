<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OrderItems;

class Order_ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = new OrderItems;
        $item->id = 1;
        $item->quantity = "2";
        $item->total = "1000";
        $item->order_id = 1;
        $item->product_id = 1;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new OrderItems;
        $item->id = 2;
        $item->quantity = "2";
        $item->total = "1000";
        $item->order_id = 2;
        $item->product_id = 2;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new OrderItems;
        $item->id = 3;
        $item->quantity = "2";
        $item->total = "1000";
        $item->order_id = 3;
        $item->product_id = 3;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

    }
}
