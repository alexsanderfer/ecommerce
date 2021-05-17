<?php


namespace Hcode;

use Hcode\Model\User;

class Model
{
    private $values = [];

    public function __call($name, $arguments)
    {
        $method = substr($name, 0, 3);
        $fieldName = substr($name, 3, strlen($name));

        switch ($method) {
            case "get":
                return (isset($this->values[$fieldName])) ? $this->values[$fieldName] : NULL;
                break;
            case "set":
                $this->values[$fieldName] = $arguments[0];
                break;
        }
    }

    public function setData($data = array())
    {
        foreach ($data as $key => $value) {
            $this->{"set" . $key}($value);
        }
    }

    /**
     * @return array
     */
    public function getValues(): array
    {
        return $this->values;
    }


}