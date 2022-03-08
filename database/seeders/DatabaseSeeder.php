<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Logixs\Modules\User\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->createUser();
    }

    public function createUser(): void
    {
        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin@admin.com';
        $user->setPassword('secret');
        $user->save();
    }
}
