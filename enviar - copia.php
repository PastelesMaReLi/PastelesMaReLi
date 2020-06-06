<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['Nombre']) >= 1 && strlen($_POST['Correo']) >= 1 && strlen($_POST['Numero']) && strlen($_POST['Correo']{
	    $name = trim($_POST['name']);
	    $email = trim($_POST['email']);
	    
	    $consulta = "INSERT INTO datos(nombre, email, ) VALUES ('$name','$email','$fechareg')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>