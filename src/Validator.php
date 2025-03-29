<?php

namespace Astylodon\Validation;

use Astylodon\Validation\Schema\ArraySchema;
use Astylodon\Validation\Schema\ObjectSchema;
use Astylodon\Validation\Schema\AbstractSchema;
use Astylodon\Validation\Schema\BooleanSchema;
use Astylodon\Validation\Schema\StringSchema;

class Validator
{
    public static function object(array $schema): ObjectSchema
    {
        return new ObjectSchema($schema);
    }

    public static function array(AbstractSchema $schema): ArraySchema
    {
        return new ArraySchema($schema);
    }

    public static function string(): StringSchema
    {
        return new StringSchema();
    }

    public static function boolean(): BooleanSchema
    {
        return new BooleanSchema();
    }
}