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

class cetakInfoProduk {

  public function cetak(Produk $produk) {
    $str = "{$produk->getLabel()}";
    return $str;
  }

}

$produk1 = new Produk("Naruto", "Masashi Kishimoto");
$cetak   = new cetakInfoProduk();
echo $cetak->cetak($produk1);
