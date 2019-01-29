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

        //A 1
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

        //U 1
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

        //D 1
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

        //for to create users
        for ($i=0; $i < 100 ; $i++) { 
            $user = new User();
            $user->username = "User $i";
            $user->name = "User $i";
            $user->last_name = "User $i";
            $user->address = "Direccion test";
            $user->email = "user$i@gmail.com";
            $user->phone_number = "132456$i";
            $user->password = bcrypt('123456');
            $user->save();
            $user->roles()->attach($role_user);
        }

        //for to create admins
        for ($i=0; $i < 20 ; $i++) { 
            $user = new User();
            $user->username = "Admin $i";
            $user->name = "Admin $i";
            $user->last_name = "Admin $i";
            $user->address = "Direccion test";
            $user->email = "admin$i@gmail.com";
            $user->phone_number = "123421678$i";
            $user->password = bcrypt('123456');
            $user->save();
            $user->roles()->attach($role_admin);
        }

        //for to create distributors
        for ($i=0; $i < 80 ; $i++) { 
            $user = new User();
            $user->username = "Distributor $i";
            $user->name = "Distributor $i";
            $user->last_name = "Distributor $i";
            $user->address = "Direccion test";
            $user->email = "distributor$i@gmail.com";
            $user->phone_number = "1234567$i";
            $user->password = bcrypt('123456');
            $user->save();
            $user->roles()->attach($role_distributor);
        }

        

    }
}