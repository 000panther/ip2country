<?php 
require '../src/Ip2Country.php';

$outputDir = '../ip2countryFiles/'
;
$i = new Ip2Country;
$i->dir = $outputDir;
$i->parseCSV($argv[1]);

echo "generated ip range files for $argv[1] in $outputDir";
