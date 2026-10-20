<?php
require 'connect.php';
if(isset($_POST['Add'])){
    $nomPrenom= $_POST['nomPrenom'];
    $telephone = $_POST['telephone'];
    $CNI= $_POST['CNI'];
    $Address= $_POST['Address'];
    $Passport = $_POST['Passport'];
    $Ville = $_POST['Ville'];
    $sql = "INSERT INTO `clients`(`nomPrenom`, `telephone`, `CNI`, `Address`, `Passport`, `Ville`) VALUES (?,?,?,?,?,?)";
    $stmt =$pdo->prepare($sql);
    $stmt->execute([$nomPrenom,$telephone,$CNI,$Address ,$Passport ,$Ville]);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="visiteur.css">
</head>
<body>
    <form action="" method="post">
    <div class="All">
        <div class="card1">
            <div class="hotel">
                <h1>INFORMATIONS</h1>
            </div>
            <div class="card">
                <p>Nom et Prenom</p>
                <input type="text" placeholder="Nom et Prenom" name="nomPrenom">
            </div>
            <div class="card">
                <p>Telephone</p>
                <input type="tel" placeholder="Telephone" name="telephone">
            </div>
            <div class="card">
                <p>
                    CNI
                </p>
                <input type="text" placeholder="CNI" name="CNI">
            </div>
            <div class="card">
                <p>Address</p>
                <input type="text" placeholder="Address" name="Address">
            </div>
        </div>
        <div class="card2">
            <div class="card">
                <p>Passport</p>
                <input type="text" placeholder="Passport" name="Passport">
            </div>
            <div class="card">
                <p>Ville</p>
                <input type="text" placeholder="Ville" name="Ville">
            </div>
        </div>
            <button type="submit" name="Add">Add</button>
            <button type="submit">Cancel</button>        
    </div>
    </form>
</body>
</html>