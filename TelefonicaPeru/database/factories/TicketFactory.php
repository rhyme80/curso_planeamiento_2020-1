<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Ticket;
use Faker\Generator as Faker;

$factory->define(Ticket::class, function (Faker $faker) {
    return [
    	'nombre'=>$faker->name,
    	'tipo_tramite'=>$faker->randomElement(['PLATAFORMA','VENTANILLA']),
    	'fecha'=>$faker->dateTimeBetween($startDate='-1 years',$ensDate='now'),
    	'estado'=>$faker->randomElement([0,1]),
    ];
});
