<?php
namespace IvixLabs\Common\Object;

trait JsonableTrait
{
    use ArrayableTrait;

    /**
     * @return string
     */
    public function toJson()
    {
        $json = json_encode($this->toArray(), JSON_UNESCAPED_UNICODE | JSON_OBJECT_AS_ARRAY);
        if ($json === false) {
            $error = json_last_error_msg();
            if ($error !== null) {
                throw new \RuntimeException($error);
            }
        }

        return $json;
    }

    /**
     * @param $string
     * @return void
     */
    public function fromJson($string)
    {
        $this->fromArray(json_decode($string, true));
    }

    /**
     * @param $string
     * @return static
     */
    public static function createFromJson($string)
    {
        $reflection = new \ReflectionClass(static::class);
        $object = $reflection->newInstanceWithoutConstructor();
        $object->fromJson($string);
        return $object;
    }

}