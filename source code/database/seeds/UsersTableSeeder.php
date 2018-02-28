<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superAdmin = new User();
        $superAdmin->name = 'Super Admin';
        $superAdmin->email = 'superadmin@gmail.com';
        $superAdmin->password = bcrypt('secret');
        $superAdmin->save();

    }
}
