<html>
<head>

	<title>Consulta</title>
	<meta charset="utf-8">
</head>
<body>
 asdasdaa
	<?php 
		$autor = $_POST["autor"];
		$mysqlConnect =  mysql_connect('localhost', 'root', '');
		$db = mysql_select_db("biblioteca", $mysqlConnect);		
		$result = mysql_query("SELECT * FROM libros where autor = '$autor'");
		while ($row = mysql_fetch_array($result)) {	
		echo "id= " . $row['identificador'] . "Titulo= " . $row['titulo'];
		echo "<br>";
		}
	?>
</body>
</html>