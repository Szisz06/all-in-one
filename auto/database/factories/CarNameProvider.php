<?php

namespace Database\Factories;

use Faker\Provider\Base;

class CarNameProvider extends Base
{
    protected static $carNames = [
        'Toyota Camry', 'Honda Accord', 'Ford Mustang', 'Chevrolet Malibu', 'Nissan Altima', 'BMW 3 Series', 'Alfa Romeo 147','VW e-up','Suzuki Swift','Opel Astra H',
    ];

    public function carName()
    {
        return $this->randomElement(self::$carNames);
    }
}
