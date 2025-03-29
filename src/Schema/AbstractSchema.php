<?php

namespace Astylodon\Validation\Schema;

abstract class AbstractSchema
{
    public abstract function validate($value): bool;
}