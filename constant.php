<?php
// Constant

// define("NAMA", "Ahdian Mirza");

// echo NAMA;

// echo "<br>";

// const UMUR = 22;
// echo UMUR;

// class Coba
// {
//     const NAMA = "Ahdian Mirza";
// }

// echo COBA::NAMA;

// echo __FILE__;

// function coba()
// {
//     return __FUNCTION__;
// }

// echo coba();

class Coba
{
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;
