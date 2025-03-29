<?php

namespace Astylodon\Validation\Schema;

class BooleanSchema extends AbstractSchema
{
    public function validate($value): bool
    {
        return is_bool($value);
    }
}