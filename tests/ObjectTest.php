<?php

use Astylodon\Validation\Validator;
use PHPUnit\Framework\TestCase;

class ObjectTest extends TestCase
{
    public function testValid()
    {
        $schema = Validator::object([
            "username" => Validator::string(),
            "password" => Validator::string()
        ]);

        $this->assertTrue($schema->validate(["username" => "Hello", "password" => "World"]));
    }
}