<?php
/**
 * Created by PhpStorm.
 * User: shaojie
 * Date: 2017/12/24
 * Time: 22:36
 */

namespace Woodfish\Component\Payment\Sdk\PayClient;


class RecursiveArrayObjectUtil
{

    public function getArrayFromObject($object)
    {
        $reflectionClass = new \ReflectionClass(get_class($object));
        $array = array();
        foreach ($reflectionClass->getProperties() as $property) {
            $property->setAccessible(true);
            $val  = $property->getValue($object);
            if (is_object($val)) {
                $array[$property->getName()] = $this->getArrayFromObject($val);
            } elseif (is_array($val) && count($val) > 0 && is_object(current($val))) {
                $v = [];
                foreach($val as $sub) {
                    $v[] = $this->getArrayFromObject($sub);
                }
                $array[$property->getName()] = $v;
            } else {
                $array[$property->getName()] = $property->getValue($object);
            }
            $property->setAccessible(false);
        }
        return $array;
    }


    /**
     *  这里是取最外层的 key, value,
     */
    public function getObjectFromArray($data, &$cls, $mappingClass = array())
    {
        foreach ($data as $key => $value)
        {
            $method = $this->formatMethodName($key);
            if (isset($mappingClass[$key])) { // class or class array
                $clsName = $mappingClass[$key];
                if ($this->endsWith($clsName, '[]')) {
                    $obj = [];
                    $clsName = str_replace('[]', '', $clsName);

                    foreach ($value as $subValue) {
                        print_r($subValue);
                        $subCls = new $clsName();
                        print_r($subCls);
                        $obj[] = $this->getObjectFromArray($subValue, $subCls);
                    }

                } else {
                    $cls = new $clsName();
                    $obj = $this->getObjectFromArray($value, $cls);
                }

                $cls->$method($obj);
            } else {
                $cls->$method($value);
            }
        }
        return $cls;
    }

    private function endsWith($haystack,$needle)
    {
        $expectedPosition = strlen($haystack) - strlen($needle);

        return strripos($haystack, $needle, 0) === $expectedPosition;
    }

    private function formatMethodName($key)
    {
        $names = explode("_", $key);
        $method = "set";
        foreach ($names as $name) {
            $method .=  ucfirst($name);
        }
        return $method;
    }

}