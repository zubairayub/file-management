<?php
$host = 'zubairayub.com';
$port = 465;

$connection = fsockopen($host, $port, $errno, $errstr, 10);

if (!$connection) {
    echo "Error: $errno - $errstr\n";
} else {
    echo "Connected successfully to $host:$port";
    fclose($connection);
}
