<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            ProjectSeeder::class,
            ProjectRoleSeeder::class,
            ProjectMemberSeeder::class,
            ProjectStatusSeeder::class,
            ProjectLabelSeeder::class,
            ProjectPermissionSeeder::class,
            TicketSeeder::class,
            TicketStaffSeeder::class,
        ]);
    }
}
