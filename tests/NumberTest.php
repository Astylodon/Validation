<?php

use Astylodon\Validation\Validator;
use PHPUnit\Framework\TestCase;

class NumberTest extends TestCase
{
    public function testNumber()
    {
        $schema = Validator::number();
        
        $this->assertTrue($schema->validate(1));
        $this->assertTrue($schema->validate(1.2));

        $this->assertFalse($schema->validate("Not a number"));
        $this->assertFalse($schema->validate("1"));
    }

    public function testInteger()
    {
        $schema = Validator::integer();

        $this->assertTrue($schema->validate(1));

        $this->assertFalse($schema->validate(1.2));
        $this->assertFalse($schema->validate(1.0));
    }

    public function testFloat()
    {
        $schema = Validator::float();
        
        $this->assertTrue($schema->validate(1.2));

        $this->assertFalse($schema->validate(1));
    }
}