<?php
$tanya=readline("pilihlah salah satu!!! (yes/no/rimba ganteng)="); //input yang akan dipilih oleh user

if($tanya=="yes")
{
    echo "Kamu menyimpulkan rimba gantenk";
}elseif($tanya=="no")
{
    echo "Kamu menyimpulkan rimba tidak jelek";
}elseif($tanya=="rimba ganteng")
{
    echo "Kamu menyukainya<3";
}else{
    echo "Anda  tidak memilih menu yang tersedia";
}

echo PHP_EOL;

$menu=readline("silahkan pilih angka 1-3 ="); //input yang dimasukkan oleh user

echo PHP_EOL;

switch($menu)
{
    case 1;
    echo "anda memilih angka 1"; //output angka pertama
break;

    case 2;
    echo "anda memilih angka 2"; //output angka kedua
break;

    case 3;
    echo "anda meimilih angka 3"; //output angka ke tiga
break;
echo "anda tidak memilih angka yang kami sediakan !!!"; //validasi selain angka 1-3
default;
}


?>