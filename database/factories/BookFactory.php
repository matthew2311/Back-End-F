<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'nama' => $faker->word(),
        'penulis' => $faker->name(),
        'harga' => $faker->randomNumber(5),
        'stock' => $faker->randomNumber(2),
        'user_id' => '1',
        'image' => 'null'
    ];
});
