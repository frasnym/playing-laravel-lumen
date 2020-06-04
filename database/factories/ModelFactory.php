<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\UserAdmin;
use Faker\Generator as Faker;

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

$factory->define(UserAdmin::class, function (Faker $faker) {
    return [
        "id_role_master" => $faker->randomElement($array = array ('1','2','3'), $count = 1),
        "full_name_adm" => $faker->name,
        "password_adm" => password_hash('123456', PASSWORD_BCRYPT),
        "status_adm" => $faker->randomElement($array = array ('0','1'), $count = 1),
        "mobile_phone_adm" => $faker->e164PhoneNumber,
        "email_adm" => $faker->email,
    ];
});
