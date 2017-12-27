<?php
class HomeWorkThree
{
    function workThree($num3,$num4)
    {
        if($num3>$num4)
        {
            for($i=$num3;$i>=$num4;$i=$i-){
                $resultTwo[$i]=$i;
            }
        }
        else{
            for($i=$num3;$i<=$num4;$i=$i+2){
                $resultFour[$i]=$i;
            }
        }

        return $resultFour;
    }
}