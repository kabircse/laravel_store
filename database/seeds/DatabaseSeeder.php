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
        Eloquent::unguard();
        $this->call(UsersTableSeeder::class);
        $this->command->info('Users table seeded !');
        $this->call(BooksTableSeeder::class);
        $this->command->info('Books table created !');
        $this->call(AuthorsTableSeeder::class);
        $this->command->info('Authors table created !');
    }
}
