<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>TRABAJO PRACTICO N1</h1>

    <h2>Punto Numero 1 - Imprima por pantalla: "Hola mundo"</h2>

    <?php
    echo "Hola mundo";
?>

    <h2>Punto Numero 2 - Cargue en una variable la cadena de caracteres "Hola mundo" y luego la imprima por pantalla.</h2>

    <?php
    $var1="Hola mundo";
    echo $var1;
?>

    <h2>Punto Numero 3 - Crear dos variables enteras y mostrar por pantalla, la suma, la resta, la multiplicacion, la division
entera y el resto de la division entera.
</h2>

<?php
    $var1=13;
    $var2=66;
    echo"Suma";
    echo $var1+$var2;

    echo"Resta";
    echo $var1-$var2;
<p></p>
    echo"multiplicacion";
    echo $var1*$var2;

    echo"division";
    echo $var1+$var2;

    echo"Modulo";
    echo $var1+$var2;


?>

    <h2>Punto Numero 4 - Realizar la transformacion de grados Celsius a Fahrenheit, para el valor 20C y luego lo imprima por
pantalla</h2>

<p>Vamos a realiza la equivalencia de 25 grados celcius a grados Fahrenheit, la formula es la siguiente ºF=(ºC*1,8)+32</p>

<?php

$var1=26;

echo $conversion=($var1*1.8)+32;

?>

    <h2>Punto Numero 5 - Implementar algoritmos que permitan: </h2>

    <h3>a) Calcular el perimetro y el area de un rectangulo, dado que su base es 18cm y su altura 12cm.</h3>

    <h3>b) Calcular el perametro y el area de un circulo dado que su radio es de 30cm.</h3>

    
<?php
?>



</body>
</html>