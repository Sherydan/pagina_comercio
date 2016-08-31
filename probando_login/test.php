<?php
$enlace =  mysql_connect('localhost', 'edgar','aiep');
if (!$enlace) {
    die('No pudo conectarse: ' . mysql_error());
}
echo 'Conectado satisfactoriamente';
mysql_close($enlace);
?>