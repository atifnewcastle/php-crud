<?php

define('DB_SERVER', 'localhost');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_NAME','php-crud');

$link = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
if ($link == false) {
    die("error! cound not connect database!!". mysqli_error());
}
