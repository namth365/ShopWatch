<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = new User;
        $item->id = 1;
        $item->name = "A";
        $item->address = "123aa";
        $item->phone = "123433";
        $item->gender = "Nam";
        $item->birthday = "2000/10/10";
        $item->email = "aa@gmail.com";
        $item->password = "123456";
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new User;
        $item->id = 2;
        $item->name = "B";
        $item->address = "123aa";
        $item->phone = "1213433";
        $item->gender = "Nam";
        $item->birthday = "2000/10/10";
        $item->email = "bb@gmail.com";
        $item->password = "123456";
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();
    }
}
