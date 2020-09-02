<?php
include 'data.php';
include 'index.view.php';

echo $total++;

$eilute = " labas rytas, Lietuviai ";
$ilgis =strlen($eilute);
echo $ilgis;

$eilute = " labas rytas, Lietuviai ";
$eilute_be_tarpu = trim($eilute);
echo $eilute_be_tarpu;

$didziosios_raides = strtoupper($eilute);
echo $didziosios_raides;

$mazosios_raides = strtolower($eilute);
echo $mazosios_raides;

$pavadinimas = ucfirst($eilute);
echo $pavadinimas;

$tekstas = str_replace("Lietuviai", "Latvija", $eilute);
echo $tekstas;

$zodis = substr($eilute, 1, 5);
echo $zodis;

