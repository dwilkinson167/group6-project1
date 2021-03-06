<?php include('group.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Group 6 Project 1</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/d3/3.4.11/d3.min.js"></script>

  </head>
  <body>
    <h1>Temperature Converter</h1>
    <form class="" action="index.php" method="post">
      <p>Temperature</p><input type="text" name="inputTemp" value="<?=$error1?>" autofocus="" />
      <select name="scale">
        <option value="Fahrenheit">Fahrenheit</option>
        <option value="Celsius">Celsius</option>
        <option value="Kelvin">Kelvin</option>
        <input type="submit" value="Convert" />
      </select>
    </form>

<div class="dashboard">
    <div class="widget">
    <h2>Fahrenheit</h2>
      <div id="thermo-f" class="thermo-Div">
        <p class="tempValue"><?=$fah?>˚F</p> <!-- PHP Tag Fahrenheit HERE -->
      </div>
    </div>

    <div class="widget">
    <h2>Celsius</h2>
      <div id="thermo-c" class="thermo-Div">
        <p class="tempValue"><?=$cel?>˚C</p> <!-- PHP Tag Celsius HERE -->
      </div>
    </div>

    <div class="widget">
    <h2>Kelvin</h2>
      <div id="thermo-k" class="thermo-Div">
        <p class="tempValue"><?=$kel?>K</p> <!-- PHP Tag Fahrenheit HERE -->
      </div>
    </div>

</div>


<script src="thermometer.js" charset="utf-8"></script>
<footer><a href="https://docs.google.com/document/d/1bHBlHIHJbhgBaWWtlshjGLsRbElNZOSOZSEwT9GX-us/edit">Staging Area</a></footer>
  </body>
</html>
