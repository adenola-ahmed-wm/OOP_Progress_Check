<?php
class person {
  public $name;
  public static $minsocialsecurity = 8;

  public static function entersocial($social){
    if(strlen($social) >= self::$minsocialsecurity){
      return true;
    } else {
      return false;
    }
  }
}
echo person::$minsocialsecurity;
 ?>
