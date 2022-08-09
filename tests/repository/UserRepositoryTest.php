<?php

namespace App\Tests\repository;
use Liip\TestFixturesBundle\Test\FixturesTrait;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class UserRepositoryTest extends KernelTestCase
{
    use FixturesTrait;
public function testCount(){
    self::bootKernel(); //demarer le kernel
   $users=  self::$container->get(UserRepository::class)->count([]);
   $this->assertsEquals(10,$users);
}
}