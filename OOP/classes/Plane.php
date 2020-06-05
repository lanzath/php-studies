<?php

/**
 * Constructor function
 */

class Plane
{
  public $series;

  public function __construct($model) {
    $this->series = $model; 
  }

  public function getModel() {
    return $this->series;
  }
}
