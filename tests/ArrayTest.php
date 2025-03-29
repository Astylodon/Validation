<?php

use Astylodon\Validation\Validator;
use PHPUnit\Framework\TestCase;

class ArrayTest extends TestCase
{
    public function testValid()
    {
        $schema = Validator::array(Validator::string());

        $this->assertTrue($schema->validate(["Hello", "World"]));
        $this->assertTrue($schema->validate([]));
    }

    public function testInvalid()
    {
        $schema = Validator::array(Validator::string());

        $this->assertFalse($schema->validate("Hello, World!"));
        $this->assertFalse($schema->validate([1, 2]));
    }
}