<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_openSpectra = "localhost";
$database_openSpectra = "openSpectra";
$username_openSpectra = "ewatson";
$password_openSpectra = "E-wma1spe";
$openSpectra = mysql_pconnect($hostname_openSpectra, $username_openSpectra, $password_openSpectra) or trigger_error(mysql_error(),E_USER_ERROR); 

?>