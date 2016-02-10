<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href = "/lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href = "/res/style.css">
  <title>Document</title>
</head>
<body>
<pre>
  <?php // print_r(WeatherController::$forecast) ?>
</pre>
  <div class="wrapper fluid-container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h1>Погода в <?php echo WeatherController::$forecast->attributes()->part . 
        ", " . WeatherController::$forecast->attributes()->city; ?></h1>
      </div>
    </div>
    <div class="row"></div>
    <div class="row"></div>
  </div>
</body>
</html>