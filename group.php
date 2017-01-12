<?php
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

if (isset($_POST["value"]))
{
    if (is_numeric($_POST["value"]))
{  
    $value=$_POST['value'];
    $type=$_POST['type'];

    switch ($_POST['type'])
        {
        case "Fahrenheit":
        $fCelcius=($value-32)*5/9;
        $fCelcius=number_format($fCelcius,2);
        $fKelvin=($value+459.67)*5/9;
        $fKelvin=number_format($fKelvin,2);  
echo 'The temperature you entered was ' . $value . ' degrees ' . $type . '. The new temperature are ' . $fCelcius . ' degrees Celcius, ' . $fKelvin . ' degrees Kelvin.';
echo "<br><a href=" . $_SERVER['PHP_SELF'] . ">Reset degrees</a>";
                break;
                
            case "Celcius":
        $cFahrenheit=$value*9/5+32;
        $cFahrenheit=number_format($cFahrenheit,2);
        $cKelvin=$value+273.15;
        $cKelvin=number_format($cKelvin,2);
echo 'The temperature you entered was ' . $value . ' degrees ' . $type . '. The new temperature are ' . $cFahrenheit . ' degrees Fahrenheit, ' . $cKelvin . ' degrees Kelvin.';
echo "<br><a href=" . $_SERVER['PHP_SELF'] . ">Reset degrees</a>";
                break;
                
            case "Kelvin":
        $kFahrenheit=$value*9/5-459.67;
        $kFahrenheit=number_format($kFahrenheit,2);
        $kCelcius= $value-273.15; 
        $kCelcius=number_format($kCelcius,2);
echo 'The temperature you entered was ' . $value . ' degrees ' . $type . '. The new temperature are ' . $kFahrenheit . ' degrees Fahrenheit, ' . $kCelcius . ' degrees  Celcius.';
echo "<br><a href=" . $_SERVER['PHP_SELF'] . ">Reset degrees</a>";
        }
 } 
  else
  {
    echo '<p>Please Enter a valid Number!!!</p>'; 
      echo "<br><a href=" . $_SERVER['PHP_SELF'] . ">Reset degrees</a>";
  }
}
else
{//show form
echo 
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
';
}

