<?php
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

if (isset($_POST["inputTemp"])){

    if (is_numeric($_POST["inputTemp"])){
  
    $value=$_POST['inputTemp'];
    $type=$_POST['tempScale'];

    switch ($_POST['tempScale']){
        
        case "Fah":
        $fCelcius=($value-32)*5/9;
        $celsius=number_format($fCelcius,2);
        $fKelvin=($value+459.67)*5/9;
        $kelvin=number_format($fKelvin,2);  
        $fahrenheit=number_format($value,2);
            
        return $fahrenheit . $celsius . $kelvin;
        break;
                
        case "Cel":
        $cFahrenheit=$value*9/5+32;
        $fahrenheit=number_format($cFahrenheit,2);
        $cKelvin=($value+273.15);
        $kelvin=number_format($cKelvin,2);
        $celsius=number_format($value,2);
        return $fahrenheit . $celsius . $kelvin;
        break;
                
        case "Kel":
        $kFahrenheit=$value*9/5-459.67;
        $fahrenheit=number_format($kFahrenheit,2);
        $kCelcius=($value-273.15); 
        $celsius=number_format($kCelcius,2);
        $kelvin=number_format($value,2);
        return $fahrenheit . $celsius . $kelvin;
        }
    }else{
        $error1 = 'Whaaat did you do!?';
        $fahrenheit = '00.00';
        $celsius = '00.00';
        $kelvin = '000.00';
        return $error1 . $fahrenheit . $celsius . $kelvin;
    }
}else{
$error1 = '';
$fahrenheit = '00.00';
$celsius = '00.00';
$kelvin = '000.00';
return $error1 . $fahrenheit . $celsius . $kelvin;

}
  



