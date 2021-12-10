<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use App\Models\Roles;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::truncate();
        

        $adminRoles = Roles::where('name','admin')->first();
        $shipperRoles = Roles::where('name','shipper')->first();
        $thukhoRoles = Roles::where('name','thukho')->first();

        $admin = Admin::create([
        	'admin_name' => 'hieuadmin',
        	'admin_email' => 'hieuadmin@yahoo.com',
        	'admin_phone' => '123456789',
        	'admin_password' => md5('123456')
        ]);

        $shipper = Admin::create([
        	'admin_name' => 'hieuauthor',
        	'admin_email' => 'hieuauthor@yahoo.com',
        	'admin_phone' => '123456789',
        	'admin_password' => md5('123456')
        ]);

        $thukho = Admin::create([
        	'admin_name' => 'hieuuser',
        	'admin_email' => 'hieuuser@yahoo.com',
        	'admin_phone' => '123456789',
        	'admin_password' => md5('123456')
        ]);

        $admin->roles()->attach($adminRoles);
        $shipper->roles()->attach($shipperRoles);
        $thukho->roles()->attach($thukhoRoles);



    }
}
