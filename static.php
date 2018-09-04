<?php

class Orang {
  public $nama;

  public function __construct($nama) {
    $this->nama = $nama;
  }

  public function setValue($nama) {
    $this->nama = $nama;
  }

  public function getValue() {
    return $this->nama;
  }
}

class Jenis extends Orang {

}

$gugun = new Jenis("Gugun");
// $gugun->setValue("Bunga");
echo $gugun->nama;
