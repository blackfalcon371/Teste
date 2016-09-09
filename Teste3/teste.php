<?php<?php
if(isset($_POST["submit"])){
$servidor = "localhost";
$usuario = "root";
$senha = "";
$database = "teste";
try {
    $pdo = new PDO("mysql:host=$servidor;dbname=$database", $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO testando (nome)
    VALUES ('".$_POST["nome"]."')";
    $pdo->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
}
$pdo = null;
?>
if(isset($_POST["submit"])){
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$database = "teste";
	try {
		$pdo = new PDO("mysql:host=$servidor;dbname=$database", $usuario, $senha);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO testando (nome)
    VALUES ('".$_POST["nome"]."')";
		$pdo->exec($sql);
		echo "New record created successfully";
	}
	catch(PDOException $e)
	{
		echo $sql . "<br>" . $e->getMessage();
	}
}
$pdo = null;
?>