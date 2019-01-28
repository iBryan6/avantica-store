<?php

use Illuminate\Database\Seeder;
use App\UserType;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = UserType::where('name','user')->first();
        $role_admin = UserType::where('name','admin')->first();
        $role_distributor = UserType::where('name','distributor')->first();

        $user = new User();
        $user->username = "Bryan Admin";
        $user->name = "Admin TEST";
        $user->last_name = "Argandoña TEST";
        $user->address = "Direccion test";
        $user->email = "admin@gmail.com";
        $user->phone_number = "00000000";
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
