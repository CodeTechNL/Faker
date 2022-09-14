<?php

namespace CodeTechNL\Faker\Fakers;

use Illuminate\Support\Carbon;

/**
 *
 */
class CustomerFaker
{

    /**
     * @param \Faker\Generator $faker
     */
    public function __construct(protected \Faker\Generator $faker)
    {
    }

    /**
     * @var array
     */
    public static array $genders = [
        'male',
        'female',
        false,
        null,
    ];

    /**
     * @return mixed
     */
    public function randomGender(): mixed
    {
        return $this->faker->randomElement(self::$genders);
    }

    /**
     * @param Carbon $now
     * @return Carbon
     */
    public function randomDateOfBirth(Carbon $now): Carbon
    {
        return $now
            ->subYears(mt_rand(18, 70))
            ->subMonths(mt_rand(0, 12))
            ->subDays(mt_rand(0, 31));
    }

    /**
     * @param int $chanceOfGettingTrue
     * @return int|null
     */
    public function randomSocialSecurityNumberNL(int $chanceOfGettingTrue = 0): ?int
    {
        if ($chanceOfGettingTrue) {
            if ($this->faker->boolean($chanceOfGettingTrue)) {
                return $this->faker->randomNumber(123456789, 987654321);
            }
        }
        return null;
    }
}
