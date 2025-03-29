<?php

namespace Astylodon\Validation\Schema;

class StringSchema extends AbstractSchema
{
    public function validate($value): bool
    {
        return is_string($value);
    }
}