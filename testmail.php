<?php
$host = 'mail.zubairayub.com';
$port = 587;

$connection = fsockopen($host, $port, $errno, $errstr, 10);

if (!$connection) {
    echo "Error: $errno - $errstr\n";
} else {
    echo "Connected successfully to $host:$port";
    fclose($connection);
}
