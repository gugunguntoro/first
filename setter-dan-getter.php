<?php

class Produk {

  private $judul,
          $penulis,
          $penerbit,
          $harga,
          $diskon = 0;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "Penerbit", $harga = 0) {
    $this->judul      = $judul;
    $this->penulis    = $penulis;
    $this->penerbit   = $penerbit;
    $this->harga      = $harga;
  }

  public function getJudul() {
    return "{$this->judul}";
  }

  public function setHarga($harga) {
    $this->harga = $harga;
  }

  public function getHarga() {
    return $this->harga - ($this->harga * $this->getDiskon() / 100);
  }

  public function setDiskon($diskon) {
    $this->diskon = $diskon;
  }

  public function getDiskon() {
    return $this->diskon;
  }

  public function getLabel() {
    return "$this->penulis, $this->penerbit";
  }

  public function getInfoProduk() {
    $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

    return $str;
  }

}

class Komik extends Produk {

  public $jmlHalaman;

  public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman) {

    parent::__construct($judul, $penulis, $penerbit, $harga);

    $this->jmlHalaman = $jmlHalaman;
  }

  public function getInfoProduk() {
    $str = "Komik : ". parent::getInfoProduk(). " - {$this->jmlHalaman} Halaman.";

    return $str;
  }

}

class Game extends Produk {

  public $waktuMain;

  public function __construct($judul, $penulis, $penerbit, $harga, $waktuMain) {

    parent::__construct($judul, $penulis, $penerbit, $harga);

    $this->waktuMain = $waktuMain;
  }

  public function getInfoProduk() {
    $str = "Game : ". parent::getInfoProduk(). " - {$this->waktuMain} Jam.";

    return $str;
  }

}


$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shoen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Cruckmann", "Sony", 250000, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";


$produk2->setHarga(500000);
$produk2->setDiskon(50);
echo $produk2->getHarga();
echo "<hr>";

echo $produk2->getJudul();
