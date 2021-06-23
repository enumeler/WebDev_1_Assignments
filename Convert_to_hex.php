<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Assignment</title>
</head>
<body>
    <h1>Decimal to hexadecimal converter</h1>
    <form action="" method="POST">
    <p>Decimal Number: <input type="number" name="in"></p>
    <p><input type="submit" name="submit" value="Convert"></p>
    </form>


<?php
    
    function Reverse($str){
        for($i=strlen($str)-1, $j=0; $j<$i; $i--, $j++) 
        {
            $temp = $str[$i];
            $str[$i] = $str[$j];
            $str[$j] = $temp;
        }
        return $str;
    }


    if(isset($_POST['submit'])) /* If the convert button is pressed, This is placed as the first statement because of Undefined index error. */
    {
        $decimal = $_POST['in']; /* Pull out the input given by the user and set $decimal to it */
        $persist_decimal = $decimal; /* This is the input value that should not be changed */
        
        {
        
            if($decimal == NULL)
            {
                
                exit(1);
            }

            elseif($decimal < 0)
            {
                echo "Must be positive";
            }
            else
            {
                $hex_characters = array('A','B','C','D','E','F');
                $hex = array(); /* This is where the final hex characters is to be pushed into */

                while(true)
                {
                    $moded_hex = $decimal % 16; /* Divide the number by 16 for its remainder */
                    if($moded_hex >= 10)
                    {
                        array_push($hex,$hex_characters[$moded_hex % 10]); /* Push hex characters if number is equal or bigger than 10 */
                    }
                    else
                    {
                        array_push($hex,(int)$moded_hex); /* If the number is less than 10, just push that number and convert to int for consistency */
                    }
                    $decimal = floor($decimal / 16); /* Reduce the number for next step */
                    if($decimal <= 0)
                    {
                        break; /* At the end when only 0 is left, we terminate the program. Less than 0 check is just for safety */
                    }

                }

                echo '<h3>Decimal Number:'.$persist_decimal.'</h3>';
                echo '<h3>Hexadecimal number: '.Reverse(implode(($hex))).'</h3>'; /* At the end, we need to reverse the result as that is the order we write the hex characters */
            }
    
        }
    }

?>
</body>
</html>