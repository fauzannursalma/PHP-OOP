<?php
// constant adalah sebuah identifier untuk menyimpan nilai
// nilainya tidak dapat dirubah

// defiene() => tidak bisa disimpan didalam kelas
// define('NAMA', 'Fauzan Nursalma');
// echo NAMA;
// echo '<br>';


// // const => bisa disimpan pada kelas
// const UMUR = 19;
// echo UMUR;

class Coba
{
  const NAMA = 'Fauzan Nursalma';
  public $kelas = __CLASS__;
}
echo Coba::NAMA;
echo '<br>';
$obj = new Coba;
echo $obj->kelas;
echo '<br><hr>';

// Magic Constant => Disediakan oleh PHP
// __LINE__, __FILE__, __DIR__, __FUNCTION__, __CLASS__
//__TRAIT__, __METHOD__, __NAMESPACE__

echo __LINE__;
echo '<br>';
function coba()
{
  return __FUNCTION__;
}
echo coba();
