<?php
//define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

if (isset($_POST["inputTemp"])){

    if (is_numeric($_POST["inputTemp"])){
    $value=$_POST['inputTemp'];
    $type=$_POST['scale'];

        switch ($_POST['scale']){
            case "Fahrenheit":
            $fCelcius=($value-32)*5/9;
            $cel=number_format($fCelcius,2);
            $fKelvin=($value+459.67)*5/9;
            $kel=number_format($fKelvin,2);
            $fah=number_format($value,2);

            return $fah . $cel . $kel;
            break;

            case "Celsius":
            $cFahrenheit=$value*9/5+32;
            $fah=number_format($cFahrenheit,2);
            $cKelvin=$value+273.15;
            $kel=number_format($cKelvin,2);
            $cel=number_format($value,2);


            return $fah . $cel . $kel;
            break;

            case "Kelvin":
            $kFahrenheit=$value*9/5-459.67;
            $fah=number_format($kFahrenheit,2);
            $kCelcius= $value-273.15;
            $cel=number_format($kCelcius,2);
            $kel=number_format($value,2);

            return $fah . $cel . $kel;
          }

      }else{

        $error1 = 'Enter valid number';
        $fah = '00.00';
        $cel = '00.00';
        $kel = '000.00';
        return $error1 . $fah . $cel . $kel;
      }

}else{

  $error1 = '';
  $fah = '00.00';
  $cel = '00.00';
  $kel = '000.00';
  return $error1 . $fah . $cel . $kel;
}
