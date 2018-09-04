<?php

class Produk {
  public $judul,
         $penulis,
         $penerbit,
         $harga,
         $jmlHalaman,
         $waktuMain;

  public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman, $waktuMain) {
    $this->judul    = $judul;
    $this->penulis  = $penulis;
    $this->penerbit = $penerbit;
    $this->harga    = $harga;
    $this->jmlHalaman = $jmlHalaman;
    $this->waktuMain = $waktuMain;
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
  public function getInfoProduk() {
    $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";

    return $str;
  }
}


class Game extends Produk {
  public function getInfoProduk() {
    $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->waktuMain} jam.";

    return $str;
  }
}

class CetakInfoProduk {
  public function cetak(Produk $produk) {
    return $str = "{$produk->judul} | {$produk->getLabel()} {$produk->harga }";
  }
}

$produk1 = new Komik("Naruto", "Masashi", "Jump", 300, 50, 0);
$produk2 = new Game("Bola", "Salah", "Jump", 300, 0, 20);

echo $produk1->getInfoProduk(). "<br>";
echo $produk2->getInfoProduk();
