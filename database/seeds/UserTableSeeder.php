<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        DB::table('users')->insert(array(
            ['name' => 'Tester Testersen', 'email' => 'tester@tester.com', 'password' => Hash::make('secret'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'John Doe', 'email' => 'john.doe@gmail.com', 'password' => Hash::make('secret'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'Jane Doe', 'email' => 'jane.doe@gmail.com', 'password' => Hash::make('secret'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'Brian White', 'email' => 'brian.white@gmail.com', 'password' => Hash::make('secret'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'Bryanna White', 'email' => 'bryanna.white@gmail.com', 'password' => Hash::make('secret'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ));
    }
}
