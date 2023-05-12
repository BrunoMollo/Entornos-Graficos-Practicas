<!-- 
# Ejercicio 4
Analizar la siguiente función, y escribir un script para probar su funcionamiento
-->
<?php
function comprobar_nombre_usuario($nombre_usuario){
//compruebo que el tamaño del string sea válido.
if (strlen($nombre_usuario)<3 || strlen($nombre_usuario)>20){
echo $nombre_usuario . " no es válido<br>";
return false;
}
//compruebo que los caracteres sean los permitidos
$permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-
_";
for ($i=0; $i<strlen($nombre_usuario); $i++){
if (strpos($permitidos, substr($nombre_usuario,$i,1))===false){
echo $nombre_usuario . " no es válido<br>";
return false;
}
}
echo $nombre_usuario . " es válido<br>";
return true;
}

echo "<h1>Nombres validos</h1>\n";
comprobar_nombre_usuario('Bruno');
comprobar_nombre_usuario('Julian');
comprobar_nombre_usuario('Julian2');
comprobar_nombre_usuario('');
comprobar_nombre_usuario('Yu');
comprobar_nombre_usuario('Juan Pablo');
comprobar_nombre_usuario('RicardoJuanAlfonzoDeLaSantaCruzMiguelBrozzo');
comprobar_nombre_usuario('Iñaki');


