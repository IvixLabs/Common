<?php
namespace IvixLabs\Common;


interface ArrayableInterface {

    public function fromArray($array);

    public function toArray();
}