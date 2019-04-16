<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use App\Car;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testInsert()
    {
      $user = new User();
        $user->name = 'colleen florence';
        $user->email = 'colleenflorence05@yahoo.com';
        $user->password = 'hellodolly05';

       $this->assertTrue($user->save());
    }
}
