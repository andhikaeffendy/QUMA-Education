<?php
define("SERVER_NAME", "localhost");
define("SERVER_USER", "root");
define("SERVER_PASS", "");
define("SERVER_DB", "quma");

@mysql_connect(SERVER_NAME,SERVER_USER,SERVER_PASS) or die("Cek file 'connect.php' ! ada yang salah !");
@mysql_select_db(SERVER_DB) or die("Database tidak ada ! cek file 'connect.php'");
?>
