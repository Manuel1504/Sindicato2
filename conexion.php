<?php
/*
*
*
*
*
*
*/
// Conecta a la base de datos
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('No conectado : ' . mysql_error());
}
// Obtiene el nombre d ela base de datos la cual se va a utilizar.
if (! mysql_select_db('test') ) {
    die ('Error al conectar : ' . mysql_error());
}


?>