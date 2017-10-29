´
<?php

	if (isset($_GET['IDENTIFICACION'])){
	$NOMBRE = $_GET['NOMBRE'];
	$APELLIDO = $_GET['APELLIDO'];
	$DIRECCION = $_GET['DIRECCION'];
	$TIPO_SANGRE = $_GET['TIPO_SANGRE'];
	$TIPO_RH = $_GET['TIPO_RH'];
	$TEL_FIJO = $_GET['TEL_FIJO'];
	$CELULAR_1 = $_GET['CELULAR_1'];
	$CELULAR_2 = $_GET['CELULAR_2'];
    $CORREO_ELECTRONICO = $_GET['CORREO_ELECTRONICO'];
    $GENERO = $_GET['GENERO'];
    $FECHA_NACIMIENTO = $_GET['FECHA_NACIMIENTO'];
    $ESTADO_ACTIVIDAD = $_GET['ESTADO_ACTIVIDAD'];
    $TIPO = $_GET['TIPO'];
    $CIUDAD = $_GET['CIUDAD'];
	}
    
    $servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "banco_sangre";
    
    
	try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO DONANTE (IDENTIFICACION,NOMBRE,APELLIDO,DIRECCION,
    TIPO_SANGRE,TIPO_RH,TEL_FIJO,CELULAR_1,CELULAR_2,CORREO_ELECTRONICO,GENERO,
    FECHA_NACIMIENTO,ESTADO_ACTIVIDAD,TIPO)
    VALUES ($IDENTIFICACION,$NOMBRE,$APELLIDO,$DIRECCION,
    $TIPO_SANGRE,$TIPO_RH,$TEL_FIJO,$CELULAR_1,$CELULAR_2,$CORREO_ELECTRONICO,$GENERO,$
    $FECHA_NACIMIENTO,$ESTADO_ACTIVIDAD,$TIPO,4CIUDAD)";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
	catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

	$conn = null;
    
    
    
    
    
    
    
    ?>