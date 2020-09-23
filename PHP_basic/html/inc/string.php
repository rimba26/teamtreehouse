<?php

// membuat function askName
// parameternya $nama
// askName("ahmad Dhani); Namamu adalah Ahmad Dani

function askName($nama)
{
    $format_name = strtolower($nama);

    echo "Namamu adalah $format_name";
}

//askName("Muhammad Rimba");