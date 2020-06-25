<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Employee::class, function (Faker $faker) {
        	$fname = '';
		    $gender = '';
		    $lname = $faker->lastName;
		    $department = '';
		    $state = '';
    		$x = rand(1, 4);
    		$y = rand(1, 4);
    		$z = rand(1, 4);

		    switch( $x ) {
		        case 1:
		                $fname = $faker->firstNameFemale;
		                $gender = 'female';
		                break;
		        case 2:
		                $fname = $faker->firstNameMale;
		                $gender = 'male';
		                break;
		        case 3:
		                $fname = $faker->firstNameFemale;
		                $gender = 'female';
		                break;
		        case 4:
		                $fname = $faker->firstNameMale;
		                $gender  = 'male';
		                break;
		    }

		    switch($y){
		    	case 1:
		    		$department = 'Users';
		    	break;
		    	case 2:
		    		$department = 'HR & Admin';
		    	break;
		    	
		    	case 3:
		    		$department = 'Accounts';
		    	break;
		    	case 4:
		    		$department = 'Commercial';
		    	break;
		    }

		    switch($z){
		    	case 1:
		    		$city = 'Nagpur';
		    		$state = 'Maharashtra';
		    	break;
		    	case 2:
		    		$city = 'Mumbai';
		    		$state = 'Maharashtra';
		    	break;
		    	
		    	case 3:
		    		$city = 'Hyderabad';
		    		$state = 'Telangana';

		    	break;
		    	case 4:
		    		$city = 'Bangluru';
		    		$state = 'Karnataka';
		    	break;
		    }

		    return [
		        'email' => $faker->unique()->safeEmail,
		        'phone_number' => $faker->e164PhoneNumber,
		        'first_name' => $fname,
		        'last_name' => $lname,
		        'birth_date' => $faker->dateTimeBetween($startDate = '-90 years', $endDate = '-16 years', $timezone = date_default_timezone_get()),
		        'gender' => $gender,
		        'street' => $faker->streetName,
		        'house_number' => $faker->numberBetween($min = 0, $max = 200),
		        'zip_code' => $faker->postcode,
		        'city' => $city,
		        'state' => $state,
		        'departments' => $department,
		        'salary' => rand(10000,100000),
    		];
        });