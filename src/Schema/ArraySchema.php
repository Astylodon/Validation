<?php

namespace Astylodon\Validation\Schema;

class ArraySchema extends AbstractSchema
{
    private AbstractSchema $schema;

    public function __construct(AbstractSchema $schema)
    {
        $this->schema = $schema;
    }

    public function validate($items): bool
    {
        if (!is_array($items))
        {
            return false;
        }

        // Validate all items
        foreach ($items as $item)
        {
            if (!$this->schema->validate($item))
            {
                return false;
            }
        }

        return true;
    }
}