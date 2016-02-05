<?php
namespace IvixLabs\Common\Object;

interface StringableInterface
{
    public function toString();

    public function fromString($string);

    public static function createFromString($string);
}