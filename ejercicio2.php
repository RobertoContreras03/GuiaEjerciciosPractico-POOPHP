<?php

class Temperatura {
  private $centigrados;

  function __construct($centigrados) {
    $this->centigrados = $centigrados;
  }

  function getCentigrados() {
    return $this->centigrados;
  }

  function setColorTexto() {
    if ($this->centigrados <= 0) {
      return "blue"; 
    } elseif ($this->centigrados <= 30) {
      return "yellow"; 
    } else {
      return "red";
    }
  }

  function getText() {
    if ($this->centigrados <= 0) {
      return "temperatura máximamente FRIA";
    } elseif ($this->centigrados <= 30) {
      return "temperatura estable";
    } else {
      return "temperatura máximamente CALIENTE";
    }
  }

  function setCentigrados($centigrados) {
    $this->centigrados = $centigrados;
  }
}

$temperatura = new Temperatura(15); 
$temperatura->setCentigrados(40); 

echo "<span style='color: " . $temperatura->setColorTexto() . ";'>" . $temperatura->getText() . "</span><br>";

?>

