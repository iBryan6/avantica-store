<?php

use App\User;
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

        //A 12
        $user = new User();
        $user->username = "Bryan Admin";
        $user->name = "Bryan";
        $user->last_name = "Argandoña";
        $user->address = "Bella Vista N-8";
        $user->email = "dennis_Bryan@hotmail.com";
        $user->phone_number = "76953543";
        $user->id_city = random_int(1, 9);
        $user->password = bcrypt('123456');
        $user->id_user_type = 1;
        $user->save();

        //U 1
        $user = new User();
        $user->username = "Cuajolote User";
        $user->name = "Renato User";
        $user->last_name = "Perez Ferrufino";
        $user->address = "Direccion test";
        $user->email = "user@gmail.com";
        $user->phone_number = "60380815";
        $user->id_city = random_int(1,9);
        $user->password = bcrypt('cuajolote');
        $user->id_user_type = 2;
        $user->save();

        //D 1
        $user = new User();
        $user->username = "Javier Distr";
        $user->name = "Javier";
        $user->last_name = "Stambuck";
        $user->address = "Direccion test";
        $user->email = "distributor@gmail.com";
        $user->phone_number = "11111111";
        $user->id_city = random_int(1,9);
        $user->password = bcrypt('javier');
        $user->id_user_type = 3;
        $user->save();

        //for to create users
        for ($i = 0; $i < 100; $i++) {
            $user = new User();
            $user->username = "User $i";
            $user->name = "User $i";
            $user->last_name = "User $i";
            $user->address = "Direccion test";
            $user->email = "user$i@gmail.com";
            $user->phone_number = "132456$i";
            $user->id_city = random_int(1,9);
            $user->password = bcrypt('123456');
            $user->id_user_type = 2;
            $user->save();
        }

        //for to create admins
        for ($i = 0; $i < 20; $i++) {
            $user = new User();
            $user->username = "Admin $i";
            $user->name = "Admin $i";
            $user->last_name = "Admin $i";
            $user->address = "Direccion test";
            $user->email = "admin$i@gmail.com";
            $user->phone_number = "123421678$i";
            $user->id_city = random_int(1,9);
            $user->password = bcrypt('123456');
            $user->id_user_type = 1;
            $user->save();
        }

        //for to create distributors
        for ($i = 0; $i < 80; $i++) {
            $user = new User();
            $user->username = "Distributor $i";
            $user->name = "Distributor $i";
            $user->last_name = "Distributor $i";
            $user->address = "Direccion test";
            $user->email = "distributor$i@gmail.com";
            $user->phone_number = "1234567$i";
            $user->id_city = random_int(1,9);
            $user->password = bcrypt('123456');
            $user->id_user_type = 3;
            $user->save();

        }
    }
}