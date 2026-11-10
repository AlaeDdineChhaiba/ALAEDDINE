<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">nomPrenom</th>
                <th scope="col">telephone</th>
                <th scope="col">CNI</th>
                <th scope="col">Address</th>
                <th scope="col">Passport</th>
                <th scope="col">Ville</th>
                <th scope="col">Update</th>
                <th scope="col">Delete</th>
                <th scope="col">TotalReservation</th>
            </tr>

        </thead>
        <tbody>
            <?php
            require 'connect.php';
              $sql = "
            SELECT clients.*, COUNT(command.visiteur) AS TotalReservation
            FROM clients JOIN command on command.visiteur = clients.CNI GROUP BY clients.CNI
            ";
            $stmt = $pdo->query($sql);

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                
                echo "
            <tr>
                <td>{$row['nomPrenom']}</td>
                <td>{$row['telephone']}</td>
                <td>{$row['CNI']}</td>
                <td>{$row['Address']}</td>
                <td>{$row['Passport']}</td>
                <td>{$row['Ville']}</td>
                <td><a href='Update.php?id={$row['id']}'  name='update' class='btn btn-success'>Update</a></td>
                <td><a href='index.php?id={$row['id']}' name='delete' class='btn btn-danger'>delete</a></td>
                <td>{$row['TotalReservation']}</td>

            </tr>
            ";
            }
            ?>
        </tbody>
    </table>

</body>

</html>