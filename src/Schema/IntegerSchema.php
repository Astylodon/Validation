<?php

namespace Astylodon\Validation\Schema;

class IntegerSchema extends NumberSchema
{
    public function validate($value): bool
    {
        if (!is_int($value))
        {
            return false;
        }

        return parent::validate($value);
    }
}