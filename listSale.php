<?php
require_once 'dbconnect.php';
$sql = 'Select * from sale';
$statement = $conn->query($sql);
$sales = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <main>
        <header>
        <nav class="navbar navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">Sale SM</a>
                <a href="index.php" class="btn btn-sm btn-primary">Nouvelle vente</a>
            </div>
        </nav>

            
        </header>
        <div class="container">
        <table class="table mt-3">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Client</th>
                    <th scope="col">Category</th>
                    <th scope="col">...</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($sales as $s) {
                        echo '<tr>';
                            echo '<td>' . $s['id'] . '</td>';
                            echo '<td>' . $s['number'] . '</td>';
                            echo '<td>' . $s['client'] . '</td>';
                            echo '<td>' . $s['category'] . '</td>';
                            echo '<td>' . '<a href="deleteTicketSale.php?id='. $s['id'] .'" class="btn btn-sm btn-danger" >Supprimer</a>'. '</td>';
                        echo '</tr>';
                    }
                ?>
            </tbody>
        </table>
        </div>
    </main>
</body>
</html>