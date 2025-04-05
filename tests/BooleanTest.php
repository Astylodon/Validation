<?php

use Astylodon\Validation\Validator;
use PHPUnit\Framework\TestCase;

class BooleanTest extends TestCase
{
    public function testValid()
    {
        $schema = Validator::boolean();

        $this->assertTrue($schema->validate(true));
        $this->assertTrue($schema->validate(false));
    }

    public function testInvalid()
    {
        $schema = Validator::boolean();

        $this->assertFalse($schema->validate(1));
    }
}