<?php
namespace IvixLabs\Common;

interface StringableInterface
{

    public function toString();

    public function fromString($string);
}