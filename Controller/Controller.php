<?php 

class Controller
{
  public static function getXMLData($url)
  {
    return Model::getXmlData($url);
  }

  public static function getJsonData($url)
  {
    return Model::getJsonData($url);
  }
}