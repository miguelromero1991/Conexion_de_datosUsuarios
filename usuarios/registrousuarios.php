<?php
include("usuarios.php");/*Se llama el archivo .php en su caso es usuarios.php para hacer la conexión*/
$regis1 = $_POST['Nombres'];/*definición de variables*/
$regis2 = $_POST['Apellidos'];
$regis3 = $_POST['Edad'];
$regis4 = $_POST['Sexo'];
$regis5 = $_POST['Correo'];
/*Permite insertar datos.*/
insertar($regis1, $regis2, $regis3, $regis4, $regis5);

function insertar($regis1, $regis2, $regis3, $regis4, $regis5){
    global $connect;/*Se define una variable global y también se invoca la variable connect del archivo usuarios.php.*/
    /*En las condicionales se verifica si el usuario ingresó correctamente todos los campos requeridos, en caso de dejar un campo nulo o definir un parámetro no existente o variable genera error de conexión*/
    if(!mysqli_query($connect, "INSERT INTO datos_usuarios(Nombres, Apellidos, Edad, Sexo,Correo) VALUES ('".$regis1."', '".$regis2."', '".$regis3."', '".$regis4."', '".$regis5."')"))
    {
        echo "Error de conexión!";
    }
    else
    {/*Mensaje por el sitio web indicando que la conexión ha sido exitosa.*/
        echo "<h1>Conexión exitosa</h1>";
        echo "<br>";
        echo "Se almacenaron los registros para que los consulte en la base de datos";
    }
}
?>