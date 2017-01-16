<?php
//define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

if (isset($_POST["Temp"]))
{
    if (is_numeric($_POST["Temp"]))
{
    $value=$_POST['Temp'];
    $type=$_POST['Kind'];

    switch ($_POST['Kind'])
        {
        case "Fahrenheit":
        $fCelcius=($value-32)*5/9;
        $Cel=number_format($fCelcius,2);
        $fKelvin=($value+459.67)*5/9;
        $Kel=number_format($fKelvin,2);
        $Fah=number_format($value,2);
        return $Cel.$Kel.$Fah;
                break;

            case "Celcius":
        $cFahrenheit=$value*9/5+32;
        $Fah=number_format($cFahrenheit,2);
        $cKelvin=$value+273.15;
        $Kel=number_format($cKelvin,2);
        $Cel=number_format($value,2);
        return $Kel.$Cel.$Fah;
                break;

            case "Kelvin":
        $kFahrenheit=$value*9/5-459.67;
        $Fah=number_format($kFahrenheit,2);
        $kCelcius= $value-273.15;
        $Cel=number_format($kCelcius,2);
        $Kel=number_format($value,2);
        return $Fah.$Cel.$Kel;
        }
 }
  else
  {
  $errorMessage="Enter a vaild number";
  $Fah='0.00';
  $Kel='0.00';
  $Cel='0.00';
  return $errorMessage.$Fah.$Kel.$Cel;
  }
}
else
{
  $errorMessage='';
  $Fah='0.00';
  $Kel='0.00';
  $Cel='0.00';
  return $errorMessage.$Fah.$Kel.$Cel;
/*echo
'
<h2>Temperature Conversion</h2>
<p>Please fill out the form to convert temperature!</P>
<form method="post" action="' . THIS_PAGE . '">
Enter the Temperature<input type="text" name="value" />
<select name="type">
<option value="Fahrenheit">Fahrenheit</option>
<option value="Celcius">Celcius</option>
<option value="Kelvin">Kelvin</option>
</select>
<br />
<input type="submit" value="Convert!" />
</form>
';*/
}
