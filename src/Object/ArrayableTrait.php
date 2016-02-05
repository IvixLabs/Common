<?php
namespace IvixLabs\Common\Object;

trait ArrayableTrait
{
    /**
     * @param $array
     * @return void
     */
    public function fromArray(array $array)
    {
        foreach ($array as $key => $val) {
            if ($this->$key instanceof ArrayableInterface) {
                $this->$key->fromArray($val);
            } else {
                $this->$key = $val;
            }
        }
    }

    /**
     * @return array
     */
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

    /**
     * @param array $array
     * @return static
     */
    public static function createFromArray(array $array)
    {
        $reflection = new \ReflectionClass(static::class);
        $object = $reflection->newInstanceWithoutConstructor();
        $object->fromArray($array);
        return $object;
    }
}