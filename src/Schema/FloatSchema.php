<?php

namespace Astylodon\Validation\Schema;

class FloatSchema extends NumberSchema
{
    public function validate($value): bool
    {
        if (!is_float($value))
        {
            return false;
        }

        return parent::validate($value);
    }
}