<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href = "/lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href = "/res/style.css">
  <title><?php echo View::$title; ?></title>
</head>
<body>
<pre>
  <?php // print_r(WeatherController::$forecast->day) ?>
</pre>
  <div class="wrapper fluid-container">
    <div class="row">
      <div class="col-lg-3 text-left">
        <div class="col-lg-12">Рассвет: <span><?php echo WeatherController::$forecast->day->sunrise ?></span></div>
        <div class="col-lg-12">Закат: <span><?php echo WeatherController::$forecast->day->sunset ?></span></div>
      </div>
      <div class="col-lg-6 text-center">
        <h1>Погода в <?php echo WeatherController::$forecast->attributes()->part . 
        ", " . WeatherController::$forecast->attributes()->city; ?></h1>
      </div>
      <div class="col-lg-3 text-left">
        <div class="col-lg-12">Луна появляется: <span><?php echo WeatherController::$forecast->day->moonrise ?></span></div>
        <div class="col-lg-12">Луна заходит: <span><?php echo WeatherController::$forecast->day->moonset ?></span></div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 text-center bg-primary">Утро</div>
      <div class="col-lg-3 text-center bg-primary">День</div>
      <div class="col-lg-3 text-center bg-primary">Вечер</div>
      <div class="col-lg-3 text-center bg-primary">Ночь</div>
    </div>
    <div class="row">
      <div class="col-lg-3 text-center bg-info">
        <span><?php echo WeatherController::$forecast->day->day_part[0]->temperature_to; ?></span> 
      </div>
      <div class="col-lg-3 text-center bg-info">
        <span><?php echo WeatherController::$forecast->day->day_part[1]->temperature_to; ?></span> 
      </div>
      <div class="col-lg-3 text-center bg-info">
        <span><?php echo WeatherController::$forecast->day->day_part[2]->temperature; ?></span> 
      </div>
      <div class="col-lg-3 text-center bg-info">
        <span><?php echo WeatherController::$forecast->day->day_part[3]->temperature_to; ?></span> 
      </div>
    </div>
  </div>
</body>
</html>