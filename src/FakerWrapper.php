<?php

namespace CodeTechNL\Faker;

use CodeTechNL\Faker\Fakers\CompanyFaker;
use CodeTechNL\Faker\Fakers\CustomerFaker;
use CodeTechNL\Faker\Fakers\OrderFaker;
use CodeTechNL\Faker\Fakers\ProductFaker;

/**
 * This FakerWrapper is to make it simple for code completion. Instead of
 * using the @property with all the classes, its easier to use @property
 * and then this wrapper file
 */
class FakerWrapper
{
    public function __construct(protected \Faker\Generator $faker)
    {

    }

    /**
     * @return CompanyFaker
     */
    public function randomBrand(): CompanyFaker
    {
        return new CompanyFaker();
    }

    /**
     * @return ProductFaker
     */
    public function product(): ProductFaker
    {
        return (new ProductFaker($this->faker));
    }

    /**
     * @return OrderFaker
     */
    public function order(): OrderFaker
    {
        return new OrderFaker($this->faker);
    }

    /**
     * @return CustomerFaker
     */
    public function customer() : CustomerFaker
    {
        return new CustomerFaker($this->faker);
    }
}
