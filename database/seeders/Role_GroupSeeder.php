<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RoleGroup;

class Role_GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = new RoleGroup;
        $item->id = 1;
        $item->role_id = 1;
        $item->group_id = 1;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new RoleGroup;
        $item->id = 2;
        $item->role_id = 2;
        $item->group_id = 2;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new RoleGroup;
        $item->id = 3;
        $item->role_id = 2;
        $item->group_id = 2;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();
    }
}
