<?php
require_once 'dbconnect.php';

$sql = 'Delete From sale where id=:a';

$statement = $conn->prepare($sql);

$statement->execute([
	':a' => $_GET['id'],
]);

$sale_id = $conn->lastInsertId();

header('Location: listSale.php');

?>