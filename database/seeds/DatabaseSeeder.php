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
        // $this->call(UsersTableSeeder::class);
        // DB::table('users')->insert([
        //     'name' => 'benbacker',
        //     'email' => 'backerben@gmail.com',
        //     'password' => bcrypt('anhdeptrai123')
        // ]);
        $this->call(Testseeder::class);
    }
}

class TestSeeder extends Seeder
{
    public function run(){
        DB::table('users')->insert([
            ['name' => 'benbacker','email' => str_random(5).'.com','password' => bcrypt('anhdeptrai123')],
            ['name' => 'Ben','email' => str_random(5).'.com','password' => bcrypt('anhdeptrai123')],
            ['name' => 'Backer','email' => str_random(5).'.com','password' => bcrypt('anhdeptrai123')]
        ]);
    }
}

