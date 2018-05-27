<?php

require_once 'rb.php';

$db = [
    'dsn' => 'mysql:host=localhost;dbname=chistyulya;charset=utf8',
    'user' => '',
    'pass' => '',
];

R::setup($db['dsn'], $db['user'], $db['pass']);
R::freeze(true);