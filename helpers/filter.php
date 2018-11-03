<?php
/**
 * Created by PhpStorm.
 * User: Hoang Truong
 * Date: 03/11/2018
 * Time: 10:46
 * @param $data
 * @return array
 */

function filter( array $data) :array
{
    $result = [];
    foreach($data as $key => $value) {
        $value = trim(htmlentities(strip_tags($value)));
        if (get_magic_quotes_gpc()){
            $value = stripslashes($value);
        }
        $result[$key] = $value;
    }

    return $result;
}