<?php

use Illuminate\Database\Seeder;
use App\UserType;

class UserTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new UserType();
        $role->name = "admin";
        $role->save();

        $role = new UserType();
        $role->name = "user";
        $role->save();

        $role = new UserType();
        $role->name = "distributor";
        $role->save();
    }
}
