<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cart;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = new Cart;
        $item->id = 1;
        $item->code = "C1";
        $item->quantity = 1;
        $item->price = "200";
        $item->product_id = 1;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Cart;
        $item->id = 2;
        $item->code = "C2";
        $item->quantity = 1;
        $item->price = "300";
        $item->product_id = 2;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Cart;
        $item->id = 3;
        $item->code = "C3";
        $item->quantity = 1;
        $item->price = "400";
        $item->product_id = 2;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Cart;
        $item->id = 4;
        $item->code = "C4";
        $item->quantity = 1;
        $item->price = "500";
        $item->product_id = 1;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();
    }
}
