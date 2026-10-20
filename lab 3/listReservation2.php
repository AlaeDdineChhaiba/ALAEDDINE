<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<body>
    <div style="margin-top: 20px; ; margin-left: 30px; margin-bottom: 40px;">
        <form action="" method="get" style="display: flex; ; flex-direction: column; ; gap: 15px;">
            <input name="visiteur" type="text" class="form-control" placeholder="Search..." style="width: 30%;" value="<?php if (isset($_GET['visiteur'])) {echo $_GET['visiteur'];                                                                                                     } ?>">
            <button name="fVisiteur" type="submit" class="btn btn-primary" style="width: 13%;">Find Reservations</button>
        </form>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Visiteur</th>
                <th scope="col">Chambre</th>
                <th scope="col">Type de chambre</th>
                <th scope="col">Lits</th>
                <th scope="col">Repas</th>
                <th scope="col">Date de debut</th>
                <th scope="col">Date de fin</th>
                <th scope="col">Total</th>
                <th scope="col">nomPrenom</th>
                <th scope="col">telephone</th>
                <th scope="col">CNI</th>
                <th scope="col">Address</th>
                <th scope="col">Passport</th>
                <th scope="col">Ville</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require 'connect.php';

            if (isset($_GET['visiteur'])) {
                $visiteur = trim($_GET['visiteur']);
                $sql = 'SELECT * FROM `clients` JOIN `command` ON command.visiteur = clients.CNI WHERE clients.CNI = :cni';
                $stmt = $pdo->prepare($sql);
            } 
                $sql = 'SELECT * FROM `clients` JOIN `command` ON command.visiteur = clients.CNI';
                $stmt = $pdo->query($sql);


            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "
            <tr>
                <td>{$row['visiteur']}</td>
                <td>{$row['chambre']}</td>
                <td>{$row['typeChambre']}</td>
                <td>{$row['lit']}</td>
                <td>{$row['repas']}</td>
                <td>{$row['debut']}</td>
                <td>{$row['fin']}</td>
                <td>{$row['total']}</td>
                <td>{$row['nomPrenom']}</td>
                <td>{$row['telephone']}</td>
                <td>{$row['CNI']}</td>
                <td>{$row['Address']}</td>
                <td>{$row['Passport']}</td>
                <td>{$row['Ville']}</td>
            </tr>
            ";
            }
            ?>
        </tbody>
    </table>

</body>

</html>