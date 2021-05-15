<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'tnchau_student'); // go cai user id moi tao hoi nay o day
define('DB_PASSWORD', 'sadec123'); // go cai password moi tao hoi nay o day
define('DB_NAME', 'tnchau_12t'); // go cai ten table SQL o day ne

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>