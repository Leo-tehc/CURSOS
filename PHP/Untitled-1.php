<html>
    <head>
        <tittle> Mi primera pagina PHP</tittle>
    </head>
    <body> 
        <?php
        echo "¡Hola mundo!"; 
        ?> 
        <? PHP 
        echo "¡Me encanta PHP!";
        ?>
        <? PHP
            echo "A";
            echo "B";
            echo "C";
        ?>
        <?php
        echo "<strong> Este es un texto en negrita.
        </strong>";
        ?>
        <?php
        echo "<p> ¡Hola mundo! </p>";// Este es un 
        echo de comentario de una sola línea "<p> ¡Estoy aprendiendo 
        PHP! </p>"; echo "<p> ¡Este es mi primer programa! </p>"
        <? php
        $nombre = 'Leonardo';
        $edad = 25;
        echo $ nombre ; // ¿Muestra 'Jhon' ?>
    </body>
    <?php 
    define ("MSG", "Hola, SoloLearners!");
    echo MSG;  // Muestra "¡Hola, SoloLearners!"?>
    <? php 
    $str = "10";
    $int = 20;
    $suma = $ str + $ int;
    echo ($suma);  // ¿Salidas 30 ?>
    <? php
    $nombre = 'David';
    function getName () { global $nombre; echo $nombre;
    }
    getName ();// ¿Muestra 'David ?>
    <? php 
    $num1 = 8;
    $num2 = 6;
    // Suma
    echo $num1 + $num2;  // 14
    // Resta
    echo $num1 - $num2;  //2
    // Multiplicación
    echo $num1 * $num2;  // 48
    // División 
    echo $num1 / $num2;  // 1.33333333333
    ?>
    <? php 
    $myArray[0] = "Jhon";
    $myArray[1] = "<strong> PHP </strong>";
    $myArray[2] = 21;
    echo "$ myArray [0] es $myArray[2] y conoce $myArray[1]";
    // Muestra "Jhon tiene 21 años y conoce PHP
    ?>
    <? php 
    $personas = matriz ("David" => "27", "Amy" => "21", "John" => "42");
    // o
    $personas ['David'] = "27";
    $personas ['Amy'] = "21";
    $personas ['John'] = "42";
    
    <?php
    $personas = array (
        'online' => array ('David', 'Amy'),
        'offline' => array ('John', 'Rob', 'Jack'),
        'lejos' => array ('Arthur ',' Daniel ')
     );
     echo $personas ['en línea'] [0]; // Emite "David"
     echo $personas ['lejos'] [1]; // Produce "Daniel"
     ?>
    
     <?php
     $x = 10;
     $y = 20;
     if $x >= $y) {
         echo $x;
     } else {
         echo $y;
     }
     // Muestra "20"
     ?>

     <?
     $edad = 21;
     if ($edad <= 13) {
         echo "Niño.";
     }  elseif ($edad>13 && $edad <19) {
         echo "Adolescente";
     } else {
         echo "Adulto";
     }
     // Salidas "Aadultos
     ?>

     switch (n) {
        case value1:
          //código a ejecutar si n = value1
          break;
        case value2:
           //código a ejecutar si n = value2
           break;
        ...
        default:
          //código que se ejecutará si n es diferente de todas las etiquetas
      }

    function sayHello() {
        echo "Hello";
    }

    sayHello();  // llamar a la función
    // Salida "¡Hola!"

    function multiplyByTwo($number) {
        $answer = $number * 2;
        echo $answer;
    }
    multiplyByTwo(3);
    // Salida 6

    function setCounter ($ num = 10) {
        echo "El contador es". $num;
    }
    setCounter (42); // El contador es 42
    sercounter (); // El contador es 10

    <form action="first.php" method="post">
    <p>Name: <input type="text" name="name" /></p>
    <p>Age: <input type="text" name="age" /></p>
    <p><input type="submit" name="submit" value="Submit" /></p>
    </form>

    <body>
    Welcome <?php echo $_POST["name"]; ?><br />
    Your age: <?php echo $_POST["age"]; ?>
    </body>

    <?php
    // Start the session
    session_start();
    $_SESSION['color'] = "red";
    $_SESSION['name'] = "John";
    ?>

    <? php
    // Inicie la sesión
    session_start ();
    ?>
    <! DOCTYPE html>
    <html>
    <body>
    <? Php
    echo "Tu nombre es". $ _SESSION ['nombre'] ;
    // ¿Muestra "Tu nombre es John"
    ?>
    </body>
    </html>

    <?php
    $value = "John";
    setcookie("user", $value, time() + (86400 * 30), '/'); 
    if(isset($_COOKIE['user'])) {
  echo "Value is: ". $_COOKIE['user'];
    }
    //Muestra "El valor es: John"
    ?>

    <?php
    $myfile = fopen("names.txt", "w");
    $txt = "John\n";
    fwrite($myfile, $txt);
    $txt = "David\n";
    fwrite($myfile, $txt);
    fclose($myfile);
    /* El archivo contiene:
    John
    David
    */
    ?>

    $myFile = "test.txt";
    $fh = fopen($myFile, 'a');
    fwrite($fh, "Some text");
    fclose($fh);

    <?php
    if(isset($_POST['text'])) {
  $name = $_POST['text'];
  $handle = fopen('names.txt', 'a');
  fwrite($handle, $name."\n");
  fclose($handle); 
    }
    ?>
    <form method="post">
    Name: <input type="text" name="text" /> 
    <input type="submit" name="submit" />
    </form>

    class Person {
        public $age; //property
        public function speak() { //method
          echo "Hi!"
        }
    }
    
</html>