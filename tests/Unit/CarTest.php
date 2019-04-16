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

    public function testCountUsers()
    {
        $carCount = 50;
        $car = factory(Car::class, 50)->create();
        $this->assertLessThanOrEqual($carCount, count($car));
        $this->assertTrue(true);
    }

    public function testUpdate2()
    {
        $car = Car::find(3);
        $car->year = '2000';
        $car->save();

        $this->assertTrue($car->save());

    }

    public function testModelString()
    {
        $car = Car::first();
        $this->assertInternalType("string", $car->model);

        $this->assertTrue(true);

    }

    public function testYearInteger()
    {
        $car = Car::first();
        $this->assertInternalType("int", $car->year);

        $this->assertTrue(true);
    }

    public function testCarMake()
    {
        $car = Car::first();
        $makeArray = ['ford', 'honda', 'toyota'];
        $this->assertContains($car->make, $makeArray);

        $this->assertTrue(true);
    }
}