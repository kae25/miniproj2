<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Constraint\IsType;
use App\User;
use App\Car;

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

}
