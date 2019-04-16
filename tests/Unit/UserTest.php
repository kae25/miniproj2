<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Constraint\IsType;
use App\User;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */


    public function testUpdate1()
    {
        $user = User::find(2);
        $user->name = 'Steve Smith';

        $this->assertTrue($user->save());
    }

    public function testCountUsers()
    {
      $userCount = 50;
      $user = factory(User::class, 50)->create();
      $this->assertGreaterThanOrEqual($userCount, count($user));
        $this->assertTrue(true);
    }


}
