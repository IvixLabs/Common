<?php
namespace IvixLabs\Common\Object;


abstract class AbstractEnum
{

    static $values = [];

    public static function getAll()
    {
        return static::$values;
    }

    /**
     * @param string $stringValue
     * @return int
     */
    public static function getIntValue($stringValue)
    {
        $types = array_flip(static::getAll());
        return $types[$stringValue];
    }

    /**
     * @param int $intValue
     * @return string
     */
    public static function getStringValue($intValue)
    {
        $types = static::getAll();
        return $types[$intValue];
    }
}