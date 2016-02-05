<?php
namespace IvixLabs\Common\Object;

interface ArrayableInterface
{
    public function toArray();

    public function fromArray(array $array);

    public static function createFromArray(array $array);
}