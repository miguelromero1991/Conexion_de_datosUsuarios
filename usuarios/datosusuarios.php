<!DOCTYPE html><!--Se inicia el documento html-->
<html><!--Inicio del documento html-->
<head><!--Inicio del encabezado html-->
<meta charset="utf-8">
<title>Bienvenido a la pagina web del Grupo Mok</title><!--Título de la página-->
</head><!--Fin del encabezado html-->
<body><!--Inicio del cuerpo html-->
    <!--Se crean los estilos para dar presentación a la página web-->
<style>
.error {color: #FF0000;}
body{
    /*color de fondo a la página*/
    background-color: gray;
}
p{
    /*tamaño de letra para los textos*/
    font-size: 25px;
}
legend{
    /*tamaño de letra para los campos del formulario*/
    font-size: 25px;
}
fieldset{
    /*ancho de la margen y grosor del borde*/
    width: 50%;
    margin-left: 15%;
    border: 1px solid#000000;
}
</style><!--fin de los estilos-->
<center><h1>Bienvenido a la página web</h1></center><!--Titulo centrado-->
<p>Estimado usuario por favor ingrese sus datos personales, para poderlos tener en nuestra Base de Datos de la empresa Grupo Mok, estos datos serán protegidos y no serán vulnerados.</p>
<p>Campos obligatorios con *</p><!--Párrafo de la página-->
<form action="registrousuarios.php" method="post"><!--Se envían los datos del formulario con el método HTTP POST-->
<fieldset><!--Márgen para el formulario web-->
<legend>Información básica del usuario</legend><!--Título de orientación-->
Nombres: <input type="text" id="Nombres" name="Nombres" require size="30" placeholder="Nombres"><!--Campos que debe diligenciar la persona-->
<span class="error">* </span>
Apellidos: <input type="text" id="Apellidos" name="Apellidos" require size="30" placeholder="Apellidos"><span class="error">* </span><br><br>
Edad: <input type="text" id="Edad" name="Edad" require size="10" placeholder="Edad"><span class="error">* </span>
Sexo: <input type="text" id="Sexo" name="Sexo" require size="30" placeholder="Sexo"><span class="error">* </span><br><br>
Correo electronico: <input type="text" id="Correo" name="Correo" require size="30" placeholder="Correo"><span class="error">* </span>
<input type="submit" name="submit" value="Enviar"><!--Permite enviar los datos al gestor de la base de datos-->
</fieldset><!--Se finaliza la márgen del formulario web-->
<p>Gracias por su colaboración</p>
</form><!--Fin del envío del formulario con el método HTTP POST-->
</body><!--Fin del cuerpo html-->
</html><!--Fin del documento html-->