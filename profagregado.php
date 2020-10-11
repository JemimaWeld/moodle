<?php
include("");
$id_profesores=$_POST['id_profesores'];
$primer_nombre=$_POST['primer_nombre'];
$segundo_nombre=$_POST['segundo_nombre'];
$primer_apellido=$_POST['primer_apellido'];
$segundo_apellido=$_POST['segundo_apellido'];
$sexo=$_POST['sexo'];
$celular=$_POST['celular'];
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];
$Sql=mysql_query("INSERT INTO datosprofesores
(id_profesores, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, sexo, celular, correo, contraseña) VALUES ('$id', '$primer_nombre', '$segundo_nombre', '$primer_apellido', '$segundo_apellido', '$sexo', '$celular', '$correo', '$contraseña')")or die(mysql_error());
header('Location: profagregar.php');
?>