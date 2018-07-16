<?php

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
      // jika table banyak
      // gunakan php artisan db:seed
        // $this->call(BlogsTableSeeder::class);
        // $this->call(MisalTableSeeder::class);
        // or
        // $this->call([
        //   UsersTableSeeder::class,
        //   PostsTableSeeder::class,
        //   CommentsTableSeeder::class,
        // ]);
    }
}
