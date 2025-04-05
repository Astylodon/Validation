<?php

namespace Astylodon\Validation\Schema;

class NumberSchema extends AbstractSchema
{
    public function validate($value): bool
    {
        return is_int($value) || is_float($value);
    }
}