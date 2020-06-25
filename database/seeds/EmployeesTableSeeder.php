<?php

use Illuminate\Database\Seeder;
use App\Employee;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory(Employee::class, 1000)->create();
        // DB::table('employees')->insert([
        //     'name' => str_random(6),
        //     'email' => strtolower(str_random(6)).'@gmail.com',
        //     'password' => bcrypt('test@123')
        // ]);
    }
}
