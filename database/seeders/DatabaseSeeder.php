<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * @return void
     */
    public function run()
    {
        // $user=new User();
        // $user->email='admin@gmail.com';
        // $user->password=Hash::make('123456');
        // $user->role='admin';
        // $user->save();
        $user=User::create([
            'fullname' => 'admin',
            'email' => 'admin@gmail.com',
            'role'=> 'admin',
            'password' => Hash::make('123456'),
            'status'=> '1',
        ]);
        $role = Role::create(['name' => 'admin','guard_name'=> 'web']);
        $permissions = Permission::pluck('id','id')->all();
        $role->syncPermissions($permissions);
        $user->assignRole([$role->name]);
    }
}
