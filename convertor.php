<?php
//convertor.php
//echo basename($_SERVER['PHP_SELF']);
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));
//echo THIS_PAGE;
//die;
/*
' . xxx . '
*/
function convertTemp($inputTemperature,$radio){
    if($radio == "Kelvin"){
        $convertedTempOne = ((($inputTemperature-273)*(9/5))+32);
        $tempLabelOne = "Fahrenheit";
        $convertedTempTwo = $inputTemperature-273.15;
        $tempLabelTwo = "Celsius";
        
        return $convertedTempOne . ' ' . $tempLabelOne . '</br>' . $convertedTempTwo . ' ' . $tempLabelTwo;
        
    }else if($radio == "Fahrenheit"){
        $convertedTempOne = (($inputTemperature-32)*(5/9));
        $tempLabelOne = "Celsius";
        $convertedTempTwo = (($inputTemperature+459.67)*(5/9));
        $tempLabelTwo = "Kelvin";
       
        return $convertedTempOne . ' ' . $tempLabelOne . '</br>' . $convertedTempTwo . ' ' . $tempLabelTwo;
        
    }else if($radio == "Celsius"){
        $convertedTempOne = (($inputTemperature*(9/5))+32);
        $tempLabelOne = "Fahrenheit";
        $convertedTempTwo = $inputTemperature+273.15;
        $tempLabelTwo = "Kelvin";
        
        return $convertedTempOne . ' ' . $tempLabelOne . '</br>' . $convertedTempTwo . ' ' . $tempLabelTwo;
                
    }else{
        return "Something is wrong";
    }
    
}

$fahrenheit = 'Fahrenheit';
$celsius = 'Celsius';
$kelvin = 'Kelvin';
$convertedTempOne = 0;
$convertedTempTwo = 0;
$tempLabelOne = "nuthin";
$tempLabelTwo = "nuthin";

if(isset($_POST["submit"]))
{//show data
    $radio = (isset($_POST['inputFormat']) ? $_POST['inputFormat'] : "");
    $inputTemperature = $_POST['Temperature'];
    echo $inputTemperature . ' ';
    echo $radio . '</br>';   
    echo convertTemp($inputTemperature,$radio);
  
    
}
else
{//show form
    echo 
    '
    <form method="post" action="' . THIS_PAGE . '">
    Enter a temperature -  <input type="text" name ="Temperature" /><br />
    <input type="radio" name="inputFormat" value="Fahrenheit" /> Fahrenheit <br />
    <input type="radio" name="inputFormat" value="Celsius" /> Celsius <br />
    <input type="radio" name="inputFormat" value="Kelvin" /> Kelvin <br />  
    <input type="submit" name="submit" value="Convert!" />
    </form>
    ';
}

