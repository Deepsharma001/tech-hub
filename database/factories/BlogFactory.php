<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Blog;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Blog::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(8),
        'category'=> $faker->randomElements(['Web Development', 'Business','Life Style'])[0],
        'description' => $faker->paragraph(5),
        'image' => $faker->imageUrl(400, 300)
    ];
});