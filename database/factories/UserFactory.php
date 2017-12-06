<?php

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

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Article::class, function (Faker $faker) {
  $types = ['中心简介',
  '政策法规',
  '规章制度',
  '新闻中心',
  '思政工作',
  '舍务部',
  '生活常识',
  '公告',];
    return [
        'a_title' => str_random(20),
        'a_context' => str_random(200),
        'a_type' =>$types[rand(0,count($types)-1)],
    ];
});
