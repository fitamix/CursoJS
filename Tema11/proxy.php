<?php

/*
 * Este script necesita un directorio llamado 'temp/' en el que poder guardar la cache
 * de cada p�gina HTML que se descarga
 */

$url = $_GET["url"];
$ct = "text/xml";
$contenido = "";

if ($f = fopen($url, 'r')) {
  while (!feof($f)) {
    $contenido .= fgets($f, 4096);
  }
  fclose($f); 
}

header("Content-Type: $ct");
echo $contenido;

?>