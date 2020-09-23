<?php
    //Buat function celcius ke Fahrenheit
    //Rumus (Nikai celcius * 9/5) +32
    //Parameter function int celcius
    //invoke function celciusto Fahrenheit

    function celciusToFahrenheit($celcius)
    {
        $conversi = ($celcius*9/5) + 32;

        echo "$celcius celcius = $conversi fahrenhait";
    }

    // celciusToFahrenhait(80);
    ?>