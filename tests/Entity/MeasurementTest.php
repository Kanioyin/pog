<?php

namespace App\Tests\Entity;

use App\Entity\Measurement;
use PHPUnit\Framework\TestCase;

class MeasurementTest extends TestCase
{

    public function dataGetFahrenheit(): array
    {
        return [
            [0, 32],
            [-100, -148],
            [100, 212],
            [37, 98.6],
            [20, 68],
            [0.5, 32.9],
            [0.1, 32.18],
            [14, 57.2],
            [15, 59],
            [16, 60.8],
        ];
    }
    /**
     * @dataProvider dataGetFahrenheit
     */
    public function testGetFahrenheit($celsius,$expectedFahrenheit): void
    {
        $measurement = new Measurement();

        $measurement->setCelsius($celsius);

        $this->assertEquals($expectedFahrenheit, $measurement->getFahrenheit());
    }
}
