<?php

namespace Astylodon\Validation;

use Astylodon\Validation\Schema\ArraySchema;
use Astylodon\Validation\Schema\ObjectSchema;
use Astylodon\Validation\Schema\AbstractSchema;
use Astylodon\Validation\Schema\BooleanSchema;
use Astylodon\Validation\Schema\FloatSchema;
use Astylodon\Validation\Schema\IntegerSchema;
use Astylodon\Validation\Schema\NumberSchema;
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

    public static function number(): NumberSchema
    {
        return new NumberSchema();
    }

    public static function integer(): IntegerSchema
    {
        return new IntegerSchema();
    }

    public static function float(): FloatSchema
    {
        return new FloatSchema();
    }

    public static function boolean(): BooleanSchema
    {
        return new BooleanSchema();
    }
}