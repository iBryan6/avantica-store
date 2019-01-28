<?php

use App\User;
use App\UserType;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = UserType::where('name', 'user')->first();
        $role_admin = UserType::where('name', 'admin')->first();
        $role_distributor = UserType::where('name', 'distributor')->first();

        $user = new User();
        $user->username = "Bryan Admin";
        $user->name = "Bryan";
        $user->last_name = "Argandoña";
        $user->address = "Bella Vista N-8";
        $user->email = "dennis_Bryan@hotmail.com";
        $user->phone_number = "76953543";
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_admin);

        $user = new User();
        $user->username = "Cuajolote User";
        $user->name = "Renato User";
        $user->last_name = "Perez Ferrufino";
        $user->address = "Direccion test";
        $user->email = "user@gmail.com";
        $user->phone_number = "60380815";
        $user->password = bcrypt('cuajolote');
        $user->save();
        $user->roles()->attach($role_user);

        $user = new User();
        $user->username = "Javier Distr";
        $user->name = "Distributor";
        $user->last_name = "Stambuck";
        $user->address = "Direccion test";
        $user->email = "distributor@gmail.com";
        $user->phone_number = "11111111";
        $user->password = bcrypt('javier');
        $user->save();
        $user->roles()->attach($role_distributor);

    }
}