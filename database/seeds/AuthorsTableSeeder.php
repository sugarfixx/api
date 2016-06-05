<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->delete();
        DB::table('authors')->insert(array(
            array('name'=>'Sir Winston Churchill','created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name'=>'Muhammad Ali', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'))
            ));
    }
}
