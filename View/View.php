<?php

class View
{
  private static $folder = "View/page/";
  public static $title;

  public static function getView($view)
  {
    include(self::$folder . $view . ".php");
  }

}