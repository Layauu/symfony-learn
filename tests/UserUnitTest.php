<?php

namespace App\Tests;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserUnitTest extends TestCase
{
    public function testIsTrue(): void
    {
        $user = new User();

        $user->setEmail('true@test.com')
             ->setFirstName('firstName')
             ->setLastName('lastName')
             ->setPassword('password')
             ->setPhone('phone')
             ->setAbout('about')
             ->setInstagram('instagram');

        $this->assertTrue($user->getEmail() === 'true@test.com');
        $this->assertTrue($user->getFirstName() === 'firstName');
        $this->assertTrue($user->getLastName() === 'lastName');
        $this->assertTrue($user->getPassword() === 'password');
        $this->assertTrue($user->getPhone() === 'phone');
        $this->assertTrue($user->getAbout() === 'about');
        $this->assertTrue($user->getInstagram() === 'instagram');
    }

    public function testIsFalse(): void
    {
        $user = new User();

        $user->setEmail('true@test.com')
             ->setFirstName('firstName')
             ->setLastName('lastName')
             ->setPassword('password')
             ->setPhone('phone')
             ->setAbout('about')
             ->setInstagram('instagram');

        $this->assertFalse($user->getEmail() === 'false@test.com');
        $this->assertFalse($user->getFirstName() === 'falseName');
        $this->assertFalse($user->getLastName() === 'falseName');
        $this->assertFalse($user->getPassword() === 'falsePassword');
        $this->assertFalse($user->getPhone() === 'falsePhone');
        $this->assertFalse($user->getAbout() === 'falseAbout');
        $this->assertFalse($user->getInstagram() === 'falseInstagram');
    }

    public function testIsEmpty(): void
    {
        $user = new User();

        $this->assertEmpty($user->getEmail());
        $this->assertEmpty($user->getFirstName());
        $this->assertEmpty($user->getLastName());
        $this->assertEmpty($user->getPhone());
        $this->assertEmpty($user->getAbout());
        $this->assertEmpty($user->getInstagram());
    }
}