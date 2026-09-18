<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $chambre = $_POST['chambre'];
        $repas = $_POST['repas'];
        $Add = $_POST['Add'];
        $Delete = $_POST['Delete'];
        $Update = $_POST['Update'];
        $Cancel = $_POST['Cancel'];
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
        <form action="" method="POST">
            <div class="All">
                <div class="hotel">
                    <h1>HOTEl</h1>
                </div>
                <div class="card">
                    <p>Visiteur</p>
                    <input type="text" placeholder="Visiteur">
                </div>
                <div class="card">
                    <p>Chombre</p>
                    <input type="number" placeholder="Chombre">
                </div>
                <div class="card">
                    <p>Type De Chambre</p>
                    <select name="chambre">
                        <option value="Standard">Standard</option>
                        <option value="Superieure">Superieure</option>
                        <option value="Deluxe">Deluxe</option>
                    </select>
                </div>
                <div class="card">
                    <p>Lits</p>
                    <input type="number" placeholder="Lits">
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
                        <input type="date">
                    </div>
                    <div class="card">
                        <p>Date de fin</p>
                        <input type="date">
                    </div>
                </div>
                <div class="cardTotal">
                    <p style="font-size: 20px;">Prix Total</p>
                    <input type="number" placeholder="Prix Total" class="total">
                </div>
                <div class="button">
                    <button type="submit" name="Add">Add</button>
                    <button type="submit" name="Delete">Delete</button>
                    <button type="submit" name="Update">Update</button>
                    <button type="submit" name="Cancel">Cancel</button>
                </div>
            </div>
        </form>
    </body>

    </html>