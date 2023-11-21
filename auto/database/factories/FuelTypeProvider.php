<?php

namespace Database\Factories;

use Faker\Provider\Base;

class FuelTypeProvider extends Base
{
protected static $fuelTypes = [
'Gasoline', 'Diesel', 'Electric', 'Hybrid',
];

public function fuelType()
{
return $this->randomElement(self::$fuelTypes);
}
}