<?php

	if (isset($_GET['IDENTIFICACION_DONANTE'])){
	
	$IDENTIFICACION = $_GET['IDENTIFICACION_DONANTE'];
	$FECHA_INGRESO = $_GET['FECHA_INGRESO'];
	$HORA_INGRESO = $_GET['HORA_INGRESO'];
	$CONSECUTIVO = $_GET['CONSECUTIVO'];
	}

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "banco_sangre";

	try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO donacion (CONSECUTIVO,IDENTIFICACION_DONANTE,FECHA_REGISTRO,HORA_REGISTRO)
    VALUES ($CONSECUTIVO,$IDENTIFICACION,$FECHA_INGRESO,$HORA_INGRESO)";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
	catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

	$conn = null;




	/* if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
	}

	$query = "INSERT INTO myCity (NOMBRE,APELLIDO,IDENTIFICACION) VALUES ($NOMBRE,$APELLIDO,$IDENTIFICACION,$CARGO)";
	$stmt = $mysqli->prepare($query);

	$stmt->execute();

	$mysqlConnect =  mysql_connect('localhost', 'root', '');
	$db = mysql_select_db('banco_sangre', $mysqlConnect);

	echo "ADSAD";
	
	$result = mysqli_execute("INSERT into usuario(NOMBRE,APELLIDO,IDENTIFICACION,CARGO)
							VALUES($NOMBRE,$APELLIDO,$IDENTIFICACION,$CARGO);");
	echo "POLI";
	
	echo ("$result");
	mysql_close($mysqlConnect);
	}

	$result = mysql_query("INSERT INTO personas(name,estado) VALUES('david', 1)");
	$result = mysql_query("UPDATE personas SET name='david2',estado=2 WHERE id=1");
	$result = mysql_query("DELETE FROM personas WHERE id=1"); ,NUMERO_CONTACTO,NOMBRE_USUARIO,CONTRASENA,, ,$NUMERO_CONTACTO,$NOMBRE_USUARIO,$CONTRASENA*/
	?>