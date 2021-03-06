<?php

namespace Database\Seeders;

use App\Models\Theme;
use Illuminate\Database\Seeder;

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
        $this->call([
            RolesTableSeeder::class,
            UsersTableSeeder::class,
            RoleUserPivotTableSeeder::class,
            PostsTableSeeder::class,
            ThemesTableSeeder::class
        ]);
    }
}
