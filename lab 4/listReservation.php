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

    <?php
        require 'connect.php';
        if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = 'DELETE FROM `command` WHERE `id` = ?';
        echo 'data';
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id]);
    }  ?>

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
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                </tr>

            </thead>
            <tbody>
                <?php
                require 'connect.php';
                $sql = 'SELECT * FROM `command`';
                $stmt = $pdo->query($sql);
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "
            <tr>
                <td>{$row['visiteur']}</td>
                <td>{$row['chambre']}</td>
                <td>{$row['lit']}</td>
                <td>{$row['typeChambre']}</td>
                <td>{$row['repas']}</td>
                <td>{$row['debut']}</td>
                <td>{$row['fin']}</td>
                <td>{$row['total']}</td>

                <td><button type='submit' name='update' class='btn btn-success'><a href='Update.php?id={$row['id']}'>Update</a></button></td>
                <td><a href='index.php?id={$row['id']}' name='delete' class='btn btn-danger'>delete</a></td>
            </tr>
            ";
                }
                ?>
            </tbody>
        </table>
        
</body>
</html>