<?php
require_once 'dbconnect.php';

$sql = 'INSERT INTO sale(number, client, category) VALUES(:a,:b,:c)';

$statement = $conn->prepare($sql);

$statement->execute([
	':a' => $_POST['number'],
    ':b' => $_POST['client'],
	':c' => $_POST['category'],
]);

$sale_id = $conn->lastInsertId();

header('Location: listSale.php');

?>