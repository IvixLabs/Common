<?php
namespace IvixLabs\Common\Object;

abstract class AbstractJsonObject implements ArrayableInterface, JsonableInterface, StringableInterface
{
    use JsonableTrait;

    public function toString()
    {
        return $this->toJson();
    }

    public function fromString($string)
    {
        $this->fromJson($string);
    }

    public static function createFromString($string)
    {
        return static::createFromJson($string);
    }
}