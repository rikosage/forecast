<?php

class View
{
  /**
   * Директория, в которой хранятся view
   * @var string
   */
  private static $folder = "View/page/";

  /**
   * Заголовок страницы
   * @var string
   */
  public static $title;

  /**
   * Метод выгружает на экран необходимый view
   * @param  string $view Название файла с view
   * @return view
   */
  public static function getView($view)
  {
    include(self::$folder . $view . ".php");
  }

}