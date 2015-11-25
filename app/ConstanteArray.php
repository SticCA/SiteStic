<?php

// Class qui permet de sauvegarder les constantes en tableau

class ConstanteArray
{
    private static $array = array();

    /**
     * @return array
     */
    public static function getArray($key)
    {
        return self::$array[$key];
    }

    /**
     * @param array $array
     */
    public static function setArray($key, $data)
    {
        self::$array[$key] = $data;
    }
}