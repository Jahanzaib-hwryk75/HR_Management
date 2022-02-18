<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user=new User();
        $user->email='admin@gmail.com';
        $user->password= Hash::make('123456');
        $user->role='admin';        
        $user->save();
    }
}
