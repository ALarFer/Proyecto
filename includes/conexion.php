<?php

$host = 'localhost';
$user = 'root';
$db = 'credentials';
$pss = 'Andrew.Lara2005';

try {
    $pdo = new PDO('mysql:host='.$host.';dbname='.$db.';charset=utf8',$user,$pss);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    'error: '.$e->getMessage();
}