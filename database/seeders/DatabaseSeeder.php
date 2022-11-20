<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    //  admin properties
    public function run()
    {
        $admin = new User();
        $admin->name="admin";
        $admin->email = "admin124@gmail.com";
        $admin->password = bcrypt('password');
        $admin->visible_password = "password";
        $admin->email_verified_at = NOW();
        $admin->occupation="CEO";
        $admin->address="Canada";
        $admin->phone="0333454";
        $admin->is_admin=1;
        $admin->save();
    }
}
