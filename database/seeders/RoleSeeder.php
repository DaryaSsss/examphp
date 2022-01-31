<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reader = new Role();
        $reader-> name = 'reader';
        $reader->save();

        $admin = new Role();
        $admin-> name = 'admin';
        $admin->save();
    }
}
