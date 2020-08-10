<?php

function getConnect() {
    /*
      test ket noi den csdl 1910.M1 cua MySQL
     */
    define('DB_HOST', 'sql12.freemysqlhosting.net:3306');
    define('DB_USER', 'sql12355205');
    define('DB_PASS', 'iTDSkGBCHI');
    define('DB_NAME', 'sql12355205');

    $cn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if (!$cn) {
        echo "<h3>ket noi that bai</h3>";
    }
    return $cn;
}

?>