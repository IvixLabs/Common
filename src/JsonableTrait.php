<?php
namespace IvixLabs\Common;


trait IvixLabs
{

    use ArrayableTrait;

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

    public function fromJson($string)
    {
        $this->fromArray(json_decode($string, true));
    }

}