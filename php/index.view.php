<?php
include 'data.php';
echo "Mokinio duomenys:<br>";
echo "Vardas: {$name}<br>";
echo "Pavarde: {$lastname}<br>";
echo "Amzius: {$amzius}<br>";
echo "Pomegiai:<br> {$pomegiai[0]}<br> {$pomegiai[1]}<br> {$pomegiai[2]}<br>";

if($total > 18){
    echo "Pirma vieta<br>";
} else if($total >12){
    echo "Antra vieta<br>";
} else if($total >10){
    echo "Trecia vieta<br>";
}
else{
    echo "Aciu, kad dalyvavote<br>";
}

switch($total){
    case 18:
        echo "Pirma vieta<br>";
    break;
        case 15:
            echo "Antra vieta<br>";
        break;
        case 10:
            echo "Trecia vieta<br>";
        break;
        default:
        echo "Aciu kad dalyvavote<br>";

}