<?php


namespace Tests;


use PHPUnit\Framework\TestCase;
use Structural\DataMapper\DataMapper;
use Structural\DataMapper\StorageAdapter;
use Structural\DataMapper\User;

class DataMapperTest extends TestCase
{
    private StorageAdapter $adapter;
    private array $data;
    protected function setUp() :void
    {
        $this->data = [1 => ['userName'=>'admin','password' => '123']];
        $this->adapter= new StorageAdapter($this->data);
    }

    public function testCanGetUserById()
    {
        $dataMapper = new DataMapper($this->adapter);
        $user = $dataMapper->findById(1);

        $this->assertEquals($this->data[1],$user);
    }

    public function testCanSaveUserObject()
    {
        $user = new User();
        $user->setUserName('ahmed');
        $user->setPassword('abc');
        $user->setId(2);

        $dataMapper = new DataMapper($this->adapter);
        $this->assertTrue($dataMapper->saveUser($user));
    }
}