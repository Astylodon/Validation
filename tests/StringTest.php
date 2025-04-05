<?php

use Astylodon\Validation\Validator;
use PHPUnit\Framework\TestCase;

class StringTest extends TestCase
{
    public function testValid()
    {
        $schema = Validator::string();

        $this->assertTrue($schema->validate("Hello, World!"));
        $this->assertTrue($schema->validate(""));
    }

    public function testInvalid()
    {
        $schema = Validator::string();

        $this->assertFalse($schema->validate(1));
    }
}