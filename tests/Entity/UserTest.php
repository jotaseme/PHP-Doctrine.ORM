<?php   // tests/Entity/UserTest.php

namespace MiW16\Results\Tests\Entity;

use MiW16\Results\Entity\User;
use PHPUnit_Framework_Error_Notice;
use PHPUnit_Framework_Error_Warning;

/**
 * Class UserTest
 * @package MiW16\Results\Tests\Entity
 * @group users
 */
class UserTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var User $user
     */
    protected $user;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        # Warning:
        PHPUnit_Framework_Error_Warning::$enabled = false;

        # notice, strict:
        PHPUnit_Framework_Error_Notice::$enabled = false;
        $this->user = new User();
    }

    /**
     * @covers \MiW16\Results\Entity\User::getId()
     */
    public function testGetId()
    {
        self::assertEquals(0, $this->user->getId());
    }

    /**
     * @covers \MiW16\Results\Entity\User::setUsername()
     * @covers \MiW16\Results\Entity\User::getUsername()
     */
    public function testGetSetUsername()
    {
        static::assertEmpty($this->user->getUsername());
        $username = 'UsEr TESt NaMe #' . rand(0, 10000);
        $this->user->setUsername($username);
        static::assertEquals($username, $this->user->getUsername());
    }

    /**
     * @covers \MiW16\Results\Entity\User::setEmail()
     * @covers \MiW16\Results\Entity\User::getEmail()
     */
    public function testGetSetEmail()
    {
        static::assertEmpty($this->user->getEmail());
        $email = 'UsEr TESt eMaiL #' . rand(0, 10000);
        $this->user->setEmail($email);
        static::assertEquals($email, $this->user->getEmail());
    }

    /**
     * @covers \MiW16\Results\Entity\User::setEnabled()
     * @covers \MiW16\Results\Entity\User::getEnabled()
     */
    public function testGetSetEnabled()
    {
        static::assertEmpty($this->user->getEnabled());
        $enabled = true;
        $this->user->setEnabled($enabled);
        static::assertEquals($enabled, $this->user->getEnabled());
    }

    /**
     * @covers \MiW16\Results\Entity\User::setPassword()
     * @covers \MiW16\Results\Entity\User::getPassword()
     */
    public function testGetSetPassword()
    {
        static::assertEmpty($this->user->getPassword());
        $password = "12345";
        $this->user->setPassword($password);
        static::assertEquals($password, $this->user->getPassword());
    }

    /**
     * @covers \MiW16\Results\Entity\User::setLastLogin()
     * @covers \MiW16\Results\Entity\User::getLastLogin()
     */
    public function testGetSetLastLogin()
    {
        static::assertEmpty($this->user->getLastLogin());
        $last_login = date_create('now');
        $this->user->setLastLogin($last_login);
        static::assertEquals($last_login, $this->user->getLastLogin());
    }

    /**
     * @covers \MiW16\Results\Entity\User::setToken()
     * @covers \MiW16\Results\Entity\User::getToken()
     */
    public function testGetSetToken()
    {
        static::assertNotEmpty($this->user->getToken());
        $token = "qwertyuiop";
        $this->user->setToken($token);
        static::assertEquals($token, $this->user->getToken());
    }

    /**
     * @covers \MiW16\Results\Entity\User::__toString()
     */
    public function testToString()
    {
        $username = 'UsEr TESt NaMe #' . rand(0, 10000);
        $this->user->setUsername($username);
        self::assertEquals($username, $this->user->__toString());
    }

    /**
     * @covers \MiW16\Results\Entity\User::jsonSerialize()
     */
    public function testjsonSerialize()
    {
        $json = $this->user->jsonSerialize();
        self::assertJson(json_encode($json));
        self::assertArrayHasKey('id', $json);
        self::assertArrayHasKey('username', $json);
        self::assertArrayHasKey('email', $json);
        self::assertArrayHasKey('enabled', $json);
        self::assertArrayHasKey('password', $json);
        self::assertArrayHasKey('last_login', $json);
        self::assertArrayHasKey('token', $json);
    }


}
