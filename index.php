<?php

function obliczStatystyki($liczby)
{
    $suma = 0;
    $min = $liczby[0];
    $max = $liczby[0];

    foreach ($liczby as $liczba) {
        $suma += $liczba;

        if ($liczba < $min) {
            $min = $liczba;
        }

        if ($liczba > $max) {
            $max = $liczba;
        }
    }

    $srednia = $suma / count($liczby);

    return [
        "min" => $min,
        "max" => $max,
        "suma" => $suma,
        "srednia" => $srednia
    ];
}

$liczby = [10, 5, 8, 20, 7];

$wynik = obliczStatystyki($liczby);

echo "Najmniejsza: " . $wynik["min"] . PHP_EOL;
echo "Największa: " . $wynik["max"] . PHP_EOL;
echo "Suma: " . $wynik["suma"] . PHP_EOL;
echo "Średnia: " . $wynik["srednia"] . PHP_EOL;
