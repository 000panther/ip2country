<?php

require_once('../src/Ip2Country.php');

echo Ip2Country::getCountryPerIp($argv[1]);
