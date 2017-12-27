<?php
/**
 * Created by PhpStorm.
 * User: Ahashan
 * Date: 12/27/2017
 * Time: 6:41 AM
 */

class HomeWorkTwo{
    function workTwo($data)
    {
        $btn = $data['btn'];
        switch ($btn){
            case 'btn2' :
                $result = $data['first_number'] + $data['last_number'];
                break;
            case '-' :
                $result = $data['first_number'] - $data['last_number'];
                break;

        }
        return $resultFour
    }
}