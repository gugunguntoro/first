<?php

class Produk {

  public $judul,
         $penulis;

  public function __construct($judul, $penulis) {
    $this->judul   = $judul;
    $this->penulis = $penulis;
  }

  public function getLabel() {
    return "$this->judul, $this->penulis";
  }

}


class cetakInfo {

  public function cetak($produk) {
    $str = "{$produk->getLabel()}";
    return $str;
  }

}

$produk1 = new Produk("Naruto", "Bunga");
$gugun   = new Orang("Gugun", "Bogor");
$cetak   = new cetakInfo();
echo $cetak->cetak($produk1);
