<!-- Connecting-->
<?php
	$databaseName = 'MAVEGA_Registrar-Data-2020';
	$dsn = 'mysql:host=webdb.uvm.edu;dbname=' . $databaseName;
	$username = 'mavega_writer';
	$password = 'NW2oKxzON77VGiFZ';

	$pdo = new PDO($dsn, $username, $password);
?>
<!-- connection complete-->
