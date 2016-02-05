<?php
namespace IvixLabs\Common\Object;

interface JsonableInterface
{
    public function toJson();

    public function fromJson($string);

    public static function createFromJson($string);
}