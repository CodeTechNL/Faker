# Installation
To-do

# Helpers

Add the following line at the top of your faker file as a helper for code completion:
`@property \CodeTechNL\Faker\FakerWrapper|\Faker\Generator $faker`


```
<?php

namespace Database\Factories;

/**
* @property \CodeTechNL\Faker\FakerWrapper|\Faker\Generator $faker
*/
class ExampleClasss extends Factory 
{

    public function definition(){
        return [
            'product_title' => $this->faker->product()->random()
        ];
    }
}
```
