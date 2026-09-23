<?php
$array = [1,2,3,4,5,6,7];
print_r(coś($array));
function coś($array){
    $sum = 0;
    $średnia = 0;
    $ilość = 0;
    $mini = $array[0];
    $maks = $array[0];
    for($i = 0; $i < count($array); $i++){
        $sum = $sum + $array[$i];
    }
    $średnia = $sum / count($array);
    for($i = 0; $i < count($array); $i++){
        if($array[$i] < $mini){
            $mini = $array[$i];
        }
    }
    for($i = 0; $i < count($array); $i++){
        if($array[$i] > $maks){
            $maks = $array[$i];
        }
    }
    $wynik = [
    "suma" => $sum,
    "srednia" => $średnia,
    "minimum" => $mini,
    "maksimum" => $maks
];

return $wynik;
    
}
?>