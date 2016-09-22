<?php

class car {
    var $model;

     public $brand;
     public $year;
     private $vin_number;

     function __construct($car_model) {
       $this->car = $car_model;
     }

   function get_model(){
     return $this->model;
}

   function set_model($new_car) {
     if($this->car != "Nissan Altima") {
       $this->car = strtoupper($new_name);
     }
     }
   }

/**
 *
 */
class driver extends car
{

  function __construct($driver_model)
  {
    $this->$set_model($driver_car);
  }
}




 ?>
