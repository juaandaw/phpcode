<?php

$host='mysql';
$dbname='proyecto11';
$user='homestead';
$password='secret';

$dsn = 'mysql:host=' . $host . ';dbname' . $dbname;

$options = [PDO::ATTR_PERSISTENT => true,
    PDO::ATTR_ERRMODE      =>PDO::ERRMODE_EXCEPTION];