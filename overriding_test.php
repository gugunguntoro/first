<?php

class Komputer {

  public function merk() {
    echo "Asus";
  }

}

class Laptop extends Komputer {

  public function merk() {
    echo "Acer";
  }

  public function cetakMerk() {
    return self::merk();
  }
  
}


$gadgetBaru = new Laptop();
echo $gadgetBaru->cetakMerk();
