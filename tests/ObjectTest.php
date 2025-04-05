<?php

use Astylodon\Validation\Validator;
use PHPUnit\Framework\TestCase;

class ObjectTest extends TestCase
{
    public function testValid()
    {
        $schema = Validator::object([
            "foo" => Validator::string(),
            "bar" => Validator::boolean()
        ]);

        $this->assertTrue($schema->validate(["foo" => "bar", "bar" => true]));
    }

    public function testInvalid()
    {
        $schema = Validator::object([
            "foo" => Validator::string(),
            "bar" => Validator::boolean()
        ]);

        $this->assertFalse($schema->validate("Hello, World!"));
        $this->assertFalse($schema->validate(["foo" => "bar"]));
        $this->assertFalse($schema->validate(["foo" => true]));
    }
}