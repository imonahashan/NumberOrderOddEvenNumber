<?php

error_reporting(0);

if(isset($_POST['btn'])){
    require_once 'HomeWork.php';
    $num1 = $_POST['first_number'];
    $num2 = $_POST['last_number'];

    $homework = new HomeWork();
    $resultOne = $homework->work($num1, $num2);
}


if(isset($_POST['btn2']))
{
    require_once 'HomeWorkTwo.php';
    $n11=$_POST['first_number1'];
    $n21=$_POST['last_number1'];
    $n31=$_POST['work1'];

    $ff= new HomeWorkTwo();

    if($n31=='even')
    {$ss1=$ff->work1($n11,$n21);}

    if($n31=='odd')
    {
        $ss1=$ff->work2($n11,$n21);}
}

?>

<html>
    <head>
        <style>
            .form1{margin:0 auto;height: 250px;width:250px;background-color: whitesmoke;}
            .form2{margin:0 auto;height: 290px;width:250px;background-color: whitesmoke;}
            .input1{width:245px; text-align: center;}
            .input2{width:245px; text-align: center;}
            .text-area1{width:245px; text-align: center;height:80px;}
            .sub1{width:245px;}
            .sub2{width:120px;}
            .label1{text-align: center;}
            .input3{margin-right: 5px;}
            .input4{margin-left: 5px;}
        </style>
    </head>
    <body>

        <form action="" method="post" class="form1">
            <label class="label1"><h1>Number Order</h1></label>
            <table>
                <tr>
                    <td><input type="text" name="first_number" placeholder="First Number" value="<?php echo $num1; ?>" class="input1"/></td>
                </tr>

                <tr>
                    <td><input type="text" name="last_number" placeholder="Last Number" value="<?php echo $num2; ?>" class="input2"/></td>
                </tr>

                <tr>

                    <td><input type="submit" name="btn" value="Submit" class="sub1"/></td>


                </tr>
                <tr>

                    <td><textarea class="text-area1" placeholder="Result"><?php foreach ($resultOne as $resultTwo){echo $resultTwo." ";}?></textarea></td>
                </tr>
            </table>
        </form>

<hr/>
        <form action="" method="post" class="form2">
            <label class="label1"><h1>Odd & Even Number</h1></label>
            <table>
                <tr>
                    <td><input type="text" name="first_number1" placeholder="First Number" value="<?php echo $num3; ?>" class="input1"/></td>
                </tr>

                <tr>
                    <td><input type="text" name="last_number1" placeholder="Last Number" value="<?php echo $num4; ?>" class="input2"/></td>
                </tr>

                <tr>

                    <td><input type="submit" name="btn2" value="Odd Number" class="input3"/><input type="submit" name="btn3" value="Even Number" class="input4"/></td>


                </tr>
                <tr>

                    <td><textarea class="text-area1" placeholder="Result"><?php foreach ($ss1 as $resultFour){echo $resultFour." ";}?></textarea></td>
                </tr>
            </table>
        </form>

    </body>

</html>
