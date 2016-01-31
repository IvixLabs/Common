<?php
namespace IvixLabs\Common;


trait ArrayableTrait
{

    public function fromArray($array)
    {
        foreach ($array as $key => $val) {
            if ($this->$key instanceof ArrayableInterface) {
                $this->$key->fromArray($val);
            } else {
                $this->$key = $val;
            }
        }
    }

    public function toArray()
    {
        $array = [];
        foreach ($this as $key => $value) {
            if ($value instanceof ArrayableInterface) {
                $array[$key] = $value->toArray();
            } else {
                $array[$key] = $value;
            }
        }

        return $array;
    }
}