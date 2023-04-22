Utilizando solamente código php y POO cree un código que permita calcular grados
centígrados en Fahrenheit.
 
 <?php

class Temperatura
{

    public $centigrados;

    function __construct($centigrados) {
      $this->centigrados = $centigrados;
    }
  
    function getCentigrados() {
      return $this->centigrados;
    }
  
    function setCentigrados($centigrados) {
      $this->centigrados = $centigrados;
    }
  
    function ConvertirCentigradosAFarenheit() {
      return ($this->centigrados * 9/5) + 32;
    }
  }
  
  $temperatura = new Temperatura(19); 
  echo $temperatura->ConvertirCentigradosAFarenheit() . " grados Fahrenheit";

?>

  