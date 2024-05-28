<?php

declare(strict_types=1);

namespace App\Contracts\DTO;

use Exception;
use JsonSerializable;

abstract class DtoBase implements JsonSerializable
{
    private array $values = [];
    private bool $strict;

    private function __construct(array $values, bool $strict)
    {
        $this->strict = $strict;

        foreach ($values as $key => $value) {
            if (mb_strstr($key, '_') !== false) {
                $key = lcfirst(str_replace('_', '', ucwords($key, '_')));
            }

            if (!property_exists($this, $key)) {
                if (!$this->strict) {
                    continue;
                }

                throw new Exception(sprintf(
                    "The property '%s' doesn't exists in '%s' DTO Class",
                    $key,
                    get_class()
                ));
            }

            $this->{$key} = $value;
            $this->values[$key] = $this->get($key);
        }
    }

    public static function create(array $values, bool $strict = false)
    {
        return new static($values, $strict);
    }

    public function values(): array
    {
        return $this->values;
    }

    public function get(string $property)
    {
        $getter = "get" . ucfirst($property);

        if (method_exists($this, $getter)) {
            return $this->{$getter}();
        }

        if (!property_exists($this, $property)) {
            throw new Exception(sprintf(
                "The property '%s' doesn't exists in '%s' DTO Class",
                $property,
                get_class()
            ));
        }

        return $this->{$property};
    }

    public function jsonSerialize()
    {
        return $this->values();
    }

    public function __get(string $name)
    {
        return $this->get($name);
    }

    public function __set(string $name, mixed $value)
    {
        throw new Exception(
            sprintf("The property '%s' is read-only", $name)
        );
    }

    public function __isset($name)
    {
        return property_exists($this, $name);
    }
}