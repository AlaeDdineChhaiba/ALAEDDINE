<?php
    require 'connect.php';
    if (isset($_POST['add'])) {
        $visiteur = $_POST['visiteur'];
        $chambre = $_POST['chambre'];
        $lit = $_POST['lit'];
        $typeChambre = $_POST['typeChambre'];
        $repas = $_POST['repas'];
        $debut = $_POST['debut'];
        $fin = $_POST['fin'];
        $total = $_POST['total'];
        $sql = "INSERT INTO `command`(`visiteur`, `chambre`, `typeChambre`, `lit`, `repas`, `debut`, `fin`, `total`) VALUES (?,?,?,?,?,?,?,?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$visiteur, $chambre, $typeChambre,  $lit, $repas, $debut, $fin, $total]);
    }
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="hotel.css">
    </head>

    <body>
        <form action="" method="post">
            <div class="All">
                <div class="hotel">
                    <h1>HOTEl</h1>
                </div>
                <div class="card">
                    <p>Visiteur</p>
                    <input type="text" placeholder="Visiteur" name="visiteur">
                </div>
                <div class="card">
                    <p>Chombre</p>
                    <input type="number" placeholder="Chombre" name="chambre">
                </div>
                <div class="card">
                    <p>Type De Chambre</p>
                    <select name="typeChambre">
                        <option value="Standard">Standard</option>
                        <option value="Superieure">Superieure</option>
                        <option value="Deluxe">Deluxe</option>
                    </select>
                </div>
                <div class="card">
                    <p>Lits</p>
                    <input type="number" placeholder="Lits" name="lit">
                </div>
                <div class="card">
                    <p>Les Repas</p>
                    <select name="repas">
                        <option value="pension_complete">Pension Complete</option>
                        <option value="demi_pension">Demi-pension</option>
                        <option value="logment_seul">Logment Seul</option>
                    </select>
                </div>
                <div class="dates">
                    <div class="card">
                        <p>Date de debut</p>
                        <input type="date" name="debut">
                    </div>
                    <div class="card">
                        <p>Date de fin</p>
                        <input type="date" name="fin">
                    </div>
                </div>
                <div class="cardTotal">
                    <p style="font-size: 20px;">Prix Total</p>
                    <input type="number" placeholder="Prix Total" class="total" name="total" >
                </div>
                <div class="button">
                    <button type="submit" name="add">Add</button>
                    <button type="submit" name="delete">Delete</button>
                    <button type="submit">Update</button>
                    <button type="submit">Cancel</button>
                </div>
            </div>
        </form>
    </body>

    </html>