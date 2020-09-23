<?php

$number=1; //integer

$float=(int)1.2; //float

$int_float=(int)$float;//integer

$str_float=(string)$float; //string

$ste_boolean=(bool)$float; //boolean

var_dump($str_boolean);

function kali(int $satu,int $dua):int
{
    return $satu*$dua;
}
echo kali(2,4);

echo PHP_EOL;

/**
 * Operator
 * subtract (-)
 * addition (+)
 * multiply (*)
 * divide (/)
 * modulus (%)
 * increment (++)
 * decrement (--)
 * 
 */


 echo 4/2;
 echo PHP_EOL;
 echo 4%2;


 $angka=1; //1
 $angka++; //2
 $angka --; //1
 $angka+=9; //10
 $angka/=5; //2
 $angka.=7; //27

echo PHP_EOL;
echo $angka;



echo PHP_EOL;

$a=5;
var_dump($a++);
?>