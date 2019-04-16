<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class CarTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testInsert1()
    {
        $car = new Car();
        $car->model = 'car';
        $car->make = 'ford';
        $car->year = '1998';

        $this->assertTrue($car->save());
    }

    public function testDelete2()
    {
        $car = new Car();
        $car->model = 'car';
        $car->make = 'ford';
        $car->year = '1998';
        $car->save();

        $this->assertTrue($car->save());
    }

    public function testUpdate2()
    {
        $car = Car::find(3);
        $car->year = '2002';
        $car->save();

        $this->assertTrue($car->save());

    }
}
