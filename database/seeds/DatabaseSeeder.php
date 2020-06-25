<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('persons')->insert([
                  'id'     => 1,
                  'name'     => 'Shashank',
                  'email'    => 'shashank@codershood.info',
                  'password' => Hash::make('shashank'),
                  'mobile'=>'098765432',
                  'isVerified'=>0
        ]);
    }
}
