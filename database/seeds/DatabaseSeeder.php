<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(VoyagerDatabaseSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ContactTableSeeder::class);
        $this->call(PermissionRoleTableSeeder::class);
        $this->call(EventsTableSeeder::class);
        $this->call(FaqTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(DataRowsTableSeeder::class);
    }
}
