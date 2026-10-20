<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>nomPrenom</th>
                <th>telephone</th>
                <th>CNI</th>
                <th>Address</th>
                <th>Passport</th>
                <th>Ville</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>

        </thead>
        <tbody>
            <?php
            require 'connect.php';
            $sql = 'SELECT * FROM `clients`';
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
                <td><button name='update'><a href='Update.php?id={$row['id']}'>Update</a</button>></td>
                <td><button name='delete.php?id={$row['id']}'>Delete</button></td>

            </tr>
            ";
            }
            ?>
        </tbody>
    </table>

</body>

</html>