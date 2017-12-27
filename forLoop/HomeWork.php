<?php

class HomeWork
{
    function work($num1,$num2)
    {
        if($num1>$num2)
        {
            for($i=$num1;$i>=$num2;$i=$i-1){
                $resultTwo[$i]=$i;
            }
        }
        else{
            for($i=$num1;$i<=$num2;$i=$i+1){
                $resultTwo[$i]=$i;
            }
        }

        return $resultTwo;
    }

}