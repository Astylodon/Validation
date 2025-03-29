<?php

namespace Astylodon\Validation\Schema;

class ObjectSchema extends AbstractSchema
{
    /**
     * @var array<string, AbstractSchema>
     */
    private array $schema;

    public function __construct(array $schema)
    {
        $this->schema = $schema;
    }

    public function validate($value): bool
    {
        if (!is_array($value))
        {
            return false;
        }

        // Validate all members
        foreach ($this->schema as $name => $schema)
        {
            if (!array_key_exists($name, $value))
            {
                return false;
            }

            if (!$schema->validate($value[$name]))
            {
                return false;
            }
        }

        return true;
    }
}