<html>
<head>
	<title>Registro</title>
	<meta charset="utf-8">
</head>
<body>
	<?php 
	$autor = $_POST["autor"];
		$iden = $_POST['id'];
		$titulo = $_POST['titulo'];
		$anno = $_POST['anno'];

		try {
    $conn = new PDO("mysql:host=localhost;dbname=biblioteca", 'root', '');
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO libros VALUES ( "'" . $iden . "'" , "$titulo" , "$autor" , "$anno")";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
	catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }


	?>
</body>
</html>