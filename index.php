<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios T24: PHP </title>
</head>
<body>
    <?php 
   /* 1) Definir una variable de cada tipo: integer, double, string y boolean. Luego imprimirlas en la página,
    una por línea.*/
    $vInt = 5;
    $vDou = 5.5;
    $vStr = "Franco";
    $vBoo = true;

    echo "<h4>Ejercicio 1</h4>";
    echo "Variable entera: ";
    echo $vInt;
    echo "<br>";
    echo "Variable double: ";
    echo $vDou;
    echo "<br>";
    echo "Variable string: ";
    echo $vStr;
    echo "<br>";
    echo "Variable booleana: ";
    echo $vBoo;
    ?>
    
    
    <!-- 2) Definir tres variables enteras. Luego definir un string que incorpore dichas variables y las sustituya en
    tiempo de ejecución. -->
    <?php  
        $num1 = 11;
        $num2 = 27;
        $num3 = 65;
        echo "<br>";
        echo "<br>";
        echo "<h4>Ejercicio 2</h4>";
        echo "Los tres números guardados en variables son: $num1, $num2 y $num3";
    ?>
   
    <!-- 3) Generar un valor aleatorio entre 1 y 3. Luego imprimir en castellano el número (Ej. si se genera el 3
    luego mostrar en la página el string "tres"). -->
    <?php 
        echo "<br>";
        echo "<br>";
        echo "<h4>Ejercicio 3</h4>";
        //genera un número aleatorio entre 1 y 3 inclusive
        $generarAleatorio = rand(1,3);
        //array con el nombre de los números
        $array=array("Uno","Dos","Tres");

        echo"El número generado es ";
        for($i=0;$i<3;$i++){            
            if($generarAleatorio==$i+1){//le asigna a i el valor inicial que se generó (1, 2 ó 3)
                echo "$generarAleatorio";//muestra el número
                echo " y se escribe $array[$i]";//busca como se escribe tal número en el array
            }
        }
    ?>

    <!-- Declara dos variables numéricas (con el valor que desees), muestra por pantalla la suma, resta,
    multiplicación, división y módulo (resto de la división) -->

    <?php 
    
        echo "<br>";
        echo "<br>";
        echo "<h4>Ejercicio 4</h4>";

        $a=700;
        $b=400;
        echo "Valor 1: ";
        echo $a, "</br>";
        echo "Valor 2: ";
        echo $b, "</br>";
        echo"</br>";

        echo "Suma: ";
        echo $a+$b,"</br>";
        echo "Resta: ";
        echo $a-$b,"</br>";
        echo "Multiplicación: ";
        echo $a*$b,"</br>";
        echo "División: ";
        echo $a/$b,"</br>";
        echo "Módulo: ";
        echo $a%$b,"</br>";        
?>

<!-- Escribe un programa PHP que realice lo siguiente: declarar una variable N de tipo int, una variable A
de tipo double y una variable C de tipo char y asigna a cada una un valor.
A continuación muestra por pantalla: -->

<?php 
        echo "<br>";
        echo "<br>";
        echo "<h4>Ejercicio 5</h4>";

        $N=2;
        $A= 9.87;
        $C= "efe efe";

        echo "Valor variable 1: ";
        echo $N, "</br>";
        echo "Valor variable 2: ";
        echo $A, "</br>";
        echo "Valor variable 3: ";
        echo $C, "</br>";
        echo"</br>";

        echo "Suma de N+A: ";
        echo $N+$A, "</br>";
        echo "Diferencia de A-N: ";
        echo $A-$N, "</br>";
        echo "Valor númerico de variable C: ";
        echo intval($C);       
?>
<!-- Escribe un programa PHP que realice lo siguiente: declarar dos variables X e Y de tipo int, dos variables N
y M de tipo double y asigna a cada una un valor. A continuación muestra por pantalla:
 -->
<?php  
        echo "<br>";
        echo "<br>";
        echo "<h4>Ejercicio 6</h4>";

        $X=20;
        $Y=10;
        $N=2.5;
        $M=19.2;

        echo "Valor variable X: ";
        echo $X, "</br>";
        echo "Valor variable Y: ";
        echo $Y, "</br>";
        echo "Valor variable M: ";
        echo $M, "</br>";
        echo"</br>";

        echo "Suma de X+Y: ";
        echo $X+$Y, "</br>";
        echo "Diferencia de X-Y: ";
        echo $A-$N, "</br>";
        echo "Producto de X-Y: ";
        echo $X*$Y, "</br>";
        echo "Cociente de X-Y: ";
        echo $X/$Y, "</br>";
        echo "Resto de X%Y: ";
        echo $X%$Y,"</br>";
        echo "Suma de N+N: ";
        echo $N+$M, "</br>";
        echo "Diferencia de N-M: ";
        echo $N-$M,"</br>";
        echo "Producto de N*M: ";
        echo $N*$M, "</br>";
        echo "El doble de cada variable: ";
        echo $X*2," ", $Y*2, " ",$N*2, " ", $M*2, " ", "</br>";

?>

<!-- Escribe un programa PHP que declare una variable entera N y asígnale un valor. A continuación escribe las
instrucciones que realicen los siguientes:
• Incrementar N en 77.
• Decrementarla en 3.
• Duplicar su valor.  -->

<?php 
        echo "<br>";
        echo "<br>";
        echo "<h4>Ejercicio 7</h4>";

        $N=80;

        echo "Valor inicial de N: ", $N, "</br>";
        echo "N + 77= ", $N+77, "</br>";
        echo "N - 3= ", $N-3, "</br>";
        echo "N * 2= ", $N*2, "</br>";
?>

<!-- Programa PHP que declare cuatro variables enteras A, B, C y D y asígnale un valor a cada una. A continuación
realiza las instrucciones necesarias para que
B tome el valor de C
• C tome el valor de A
• A tome el valor de D
• D tome el valor de B -->
<?php  
        echo "<br>";
        echo "<br>";
        echo "<h4>Ejercicio 8</h4>";

        $A=10;
        $B=20;
        $C=30;
        $D=40;
        $extra=$B;
        
        echo "Valor inicial Variable B: ", $B , "</br>";
        echo "Valor inicial Variable C: ", $C , "</br>";
        echo "Valor inicial Variable A: ", $A , "</br>";
        echo "Valor inicial Variable D: ", $D , "</br>", "</br>";

        $B = $C;
        $C = $A;
        $A = $D;
        $D = $extra;

        echo "Variable B: ", $B , "</br>";
        echo "Variable C: ", $C , "</br>";
        echo "Variable A: ", $A , "</br>";
        echo "Variable D: ", $D , "</br>";

?>

</body>
</html>