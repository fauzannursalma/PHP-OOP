<?php

// class ContohStatic
// {
//   public static $angka = 1;

//   public static function halo1()
//   {
//     return "Halo " . self::$angka++ . " Kali. <br>";
//   }
// }
// echo 'Object menggunakan Keyword Static <br>';
// echo ContohStatic::$angka;
// echo '<br>';
// echo ContohStatic::halo1();
// echo ContohStatic::halo1();
// echo '<br> <hr>';


class Contoh
{
  public $angka = 1;

  public function halo2()
  {
    return "Halo " . $this->angka++ . " Kali. <br>";
  }
}

$obj = new Contoh;
echo 'Object biasa 1 <br>';
echo $obj->halo2();
echo $obj->halo2();
echo $obj->halo2();
$obj2 = new Contoh;
echo 'Object biasa 2 <br>';
echo $obj2->halo2();
echo $obj2->halo2();
echo $obj2->halo2();
echo '<hr>';

class ContohStatic2
{
  public static $angka = 1;

  public function halo3()
  {
    return "Halo " . self::$angka++ . " Kali. <br>";
  }
}

$objs = new ContohStatic2;
echo 'Object Static 1 <br>';
echo $objs->halo3();
echo $objs->halo3();
echo $objs->halo3();

$objs2 = new ContohStatic2;
echo 'Object Static 2 <br>';
echo $objs2->halo3();
echo $objs2->halo3();
echo $objs2->halo3();



// Untuk apa Static Keyword ?
// Member yang terikat dengan kelas, bukan object
// Nilai static akan selalu tetap meskipun object di intansiasi berulang kali
// Membuat kode menjadi 'procedural'
// Biasanya digunakan untuk membuat fungsi bantuan/helper 
// atau digunakan di class" utility pada framework