<?php
namespace IvixLabs\Common;


interface JsonableInterface
{

    public function toJson();

    public function fromJson($string);
}