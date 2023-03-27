# Ejercitación 2

HTML está compuesto por un conjunto de elementos que son la base de su estructura. Los elementos están compuestos por dos tags (el de apertura y el de cierre) y el contenido en el medio (con excepción de los elementos vacíos ). Cada tag puede tener atributos(proporcionan ciertas características como altura, ancho, color, etc.) y eventos (asocian un scriptque se ejecuta cuando el evento ocurre).
 
Analizar los siguientes segmentos de código indicando en qué sección del documento HTML se colocan, cuál es el efecto que producen y señalar cada uno de los elementos, etiquetas, y atributos(nombre y valor), aclarando si es obligatorio.

---
<br>

a) Este fragmento de codigo es simplemente un comentario, puede ubicarse en cualquier lugar del documento HTML. No tiene ningun efecto en el sitio que se renderiza en el navegado, es mas que nada un nota para el programador. 
```html
<!-- Código controlado el día 12/08/2009 -->
```
<br>

b) En este extracto se declara un 'div', es decir una division o seccion en el HTML. Esta seccion contiene el texto 'Contenido del bloque1', el cual sera renderizado en la pantalla del navegador en el lugar donde fue declarada la division; vale aclarar que el texto no es en si obligatorio y un 'div' puede contener a otros elementos HTML. Ademas tiene un id 'bloque1' el cual no es extrictamente necesario pero puede que sea utilizado para agregar estilos a este elemento usando CSS. Este tag debe ser usado dentro del elemento 'body'.
```html
<div id="bloque1">Contenido del bloque1</div>
```

c)
```html
<img src="" alt="lugar imagen" id="im1" name="im1" width="32" height="32"longdesc="detalles.htm" />
```

d)
```html
<meta name="keywords" lang="es" content="casa, compra, venta, alquiler " />
<meta http-equiv="expires" content="16-Sep-2019 7:49 PM" />
```

e)
```html
<a href="http://www.e-style.com.ar/resumen.html" type="text/html" hreflang="es" charset="utf-8" rel="help">Resumen HTML </a>
```

f)
```html
<table width="200" summary="Datos correspondientes al ejercicio vencido">
<caption align="top"> Título </caption>
<tr>
<th scope="col">&nbsp;</th>
<th scope="col">A</th>
<th scope="col">B</th>
<th scope="col">C</th>
</tr>
<tr>
<th scope="row">1º</th>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<th scope="row">2º</th>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
</table>
```