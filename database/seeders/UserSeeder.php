<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user-> name = 'admin';
        $user-> email = 'admin@admin.ru';
        $user-> password = Hash::make(12345);
        $user->role_id = 2; 
        $user->save();
    }
}
