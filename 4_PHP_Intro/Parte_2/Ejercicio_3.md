# Ejercicio 3
En cada caso, indicar las salidas correspondientes

## a)
```php
<?php
$fun = getdate();
echo "Has entrado en esta pagina a las $fun[hours] horas, con $fun[minutes] minutos y $fun[seconds] segundos, del $fun[mday]/$fun[mon]/$fun[year]";
?>
```
La salida de este codigo depende de cuando es ejecutado, ya que la funcion *getdate()* devuelce un array con el tiempo actual. La salida del script es un string que dice cuando fue ejecutado.

Salida (cuando yo lo ejecute):
```
Has entrado en esta pagina a las 13 horas, con 24 minutos y 51 segundos, del 12/5/2023
```


## b)
```php
<?php
function sumar($sumando1,$sumando2){
    $suma=$sumando1+$sumando2;
    echo $sumando1."+".$sumando2."=".$suma;
}
sumar(5,6);
?>
```
Este codigo muestra una suma, es decir, los dos sumandos (5 y 6) separados por un *+* y luego de un *=* el resultado (11). Esto se hace usando una funcion.

Salida:
```
5+6=11
```