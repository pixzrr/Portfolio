<?php
define('SERVER', 'mysql:server=localhost; dbname=portfolio');
define('USER', 'root');
define('PASS', '');

$connexion = new PDO(SERVER, USER, PASS);
