<?php

namespace CodeTechNL\Faker;

use CodeTechNL\Faker\Fakers\CompanyFaker;
use CodeTechNL\Faker\Fakers\ProductFaker;
use Illuminate\Support\ServiceProvider;

class FakerServiceProvider extends ServiceProvider
{
    public function register()
    {

        /** @var \Faker\Generator $faker */
        $faker = app('Faker\Generator');

        $faker->addProvider(new FakerWrapper($faker));
    }
}
