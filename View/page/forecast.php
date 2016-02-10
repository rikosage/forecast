<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href = "/lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href = "/res/style.css">
  <title><?php echo View::$title; ?></title>
</head>
<body>
  <div class="wrapper fluid-container">
    <div class="row">
      <div class="col-lg-3 text-left">
        <div class="col-lg-12">Рассвет: <span><?php echo WeatherController::$forecast->day->sunrise ?></span></div>
        <div class="col-lg-12">Закат: <span><?php echo WeatherController::$forecast->day->sunset ?></span></div>
      </div>
      <div class="col-lg-6 text-center">
        <h1>Погода в <?php echo WeatherController::$forecast->attributes()->part . 
        ", " . WeatherController::$forecast->attributes()->city; ?> на <br><br>
        <span class = "date bg-success"><?php echo date("d F Y | G:i"); ?></span>
        </h1>
      </div>
      <div class="col-lg-3 text-left">
        <div class="col-lg-12">Луна появляется: <span><?php echo WeatherController::$forecast->day->moonrise ?></span></div>
        <div class="col-lg-12">Луна заходит: <span><?php echo WeatherController::$forecast->day->moonset ?></span></div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-1 col-lg-offset-1 text-left"></div>
      <div class="col-lg-2 text-center bg-primary">Утро</div>
      <div class="col-lg-2 text-center bg-primary">День</div>
      <div class="col-lg-2 text-center bg-primary">Вечер</div>
      <div class="col-lg-2 text-center bg-primary">Ночь</div>
    </div>
    <div class="row">
    <div class="col-lg-1 col-lg-offset-1 text-left">Температура</div>
      <div class="col-lg-2 text-center bg-info">
        <span><?php echo WeatherController::$forecast->day->day_part[0]->{'temperature-data'}->avg; ?></span> 
      </div>
      <div class="col-lg-2 text-center bg-info">
        <span><?php echo WeatherController::$forecast->day->day_part[1]->{'temperature-data'}->avg; ?></span> 
      </div>
      <div class="col-lg-2 text-center bg-info">
        <span><?php echo WeatherController::$forecast->day->day_part[2]->{'temperature-data'}->avg; ?></span> 
      </div>
      <div class="col-lg-2 text-center bg-info">
        <span><?php echo WeatherController::$forecast->day->day_part[3]->{'temperature-data'}->avg; ?></span> 
      </div>
    </div>
    <div class="row">
      <div class="col-lg-1 col-lg-offset-1 text-left">Тип</div>
      <div class="col-lg-2 text-center bg-info">
        <?php echo WeatherController::$forecast->day->day_part[0]->weather_type; ?>
      </div>
      <div class="col-lg-2 text-center bg-info">
        <?php echo WeatherController::$forecast->day->day_part[1]->weather_type; ?>
      </div>
      <div class="col-lg-2 text-center bg-info">
        <?php echo WeatherController::$forecast->day->day_part[2]->weather_type; ?>
      </div>
      <div class="col-lg-2 text-center bg-info">
        <?php echo WeatherController::$forecast->day->day_part[3]->weather_type; ?>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-1 col-lg-offset-1 text-left">Ветер (м\с)</div>
      <div class="col-lg-2 text-center bg-info">
        <?php echo WeatherController::$forecast->day->day_part[0]->wind_speed; ?>
      </div>
      <div class="col-lg-2 text-center bg-info">
        <?php echo WeatherController::$forecast->day->day_part[1]->wind_speed; ?>
      </div>
      <div class="col-lg-2 text-center bg-info">
        <?php echo WeatherController::$forecast->day->day_part[2]->wind_speed; ?>
      </div>
      <div class="col-lg-2 text-center bg-info">
        <?php echo WeatherController::$forecast->day->day_part[3]->wind_speed; ?>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-1 col-lg-offset-1 text-left">Давление</div>
      <div class="col-lg-2 text-center bg-info">
        <?php echo WeatherController::$forecast->day->day_part[0]->pressure; ?>
      </div>
      <div class="col-lg-2 text-center bg-info">
        <?php echo WeatherController::$forecast->day->day_part[1]->pressure; ?>
      </div>
      <div class="col-lg-2 text-center bg-info">
        <?php echo WeatherController::$forecast->day->day_part[2]->pressure; ?>
      </div>
      <div class="col-lg-2 text-center bg-info">
        <?php echo WeatherController::$forecast->day->day_part[3]->pressure; ?>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-1 col-lg-offset-1 text-left">Влажность</div>
      <div class="col-lg-2 text-center bg-info">
        <?php echo WeatherController::$forecast->day->day_part[0]->humidity; ?>
      </div>
      <div class="col-lg-2 text-center bg-info">
        <?php echo WeatherController::$forecast->day->day_part[1]->humidity; ?>
      </div>
      <div class="col-lg-2 text-center bg-info">
        <?php echo WeatherController::$forecast->day->day_part[2]->humidity; ?>
      </div>
      <div class="col-lg-2 text-center bg-info">
        <?php echo WeatherController::$forecast->day->day_part[3]->humidity; ?>
      </div>
    </div>
  </div>
</body>
</html>