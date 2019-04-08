<?php
include('./config/config.php');

if (!empty($_POST) && $_POST["pswd"] == "alexandrelouf"){
    unset($_POST["pswd"]);
    $sql = "INSERT INTO log_bet (date, mise, cote, success) VALUES (:date, :mise, :cote, :success)";
    $insert = $pdo->prepare($sql);
    $insert->execute($_POST);
    header('Location: tracking.php'); 
}

$tracks = $pdo->query("SELECT * FROM log_bet");
$track = $tracks->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('./inc/head.php') ?>
    <title>Track records</title>
</head>
<body>
    <?php include('./inc/nav.php') ?>
    <div class="container align-items-center d-flex flex-column">
        <h1>Calcul des mises</h1>
        <form method="POST" action="./tracking.php">
            <div class="form-group">
                <label for="secu">Sécurité</label>
                <input type="text" class="form-control" id="secu" name="pswd">
            </div>
            <div class="form-group">
                <label for="date">Date du paris</label>
                <input type="date" class="form-control" id="date" name="date">
            </div>
            <div class="form-group">
                <label for="mise">Mise</label>
                <input type="number" class="form-control" id="mise" placeholder="8" name="mise">
            </div>
            <div class="form-group">
                <label for="cote">Cote</label>
                <input type="number" class="form-control" id="cote" placeholder="1.3" name="cote">
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="success" id="exampleRadios1" value="1" checked>
                <label class="form-check-label" for="exampleRadios1">
                    Pass
                </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="success" id="exampleRadios2" value="0">
                <label class="form-check-label" for="exampleRadios2">
                    Fail
                </label>
                </div>
            <button type="submit" class="btn btn-primary mt-2" id="calcbankroll">Ajouter</button>
        </form>

        <table class="table table-striped mt-5">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Date</th>
                <th scope="col">Mise</th>
                <th scope="col">Cote</th>
                <th scope="col">Succès</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                foreach($track as $onetrack) {
                    $success = "Pass";
                    if ($onetrack['success'] == 0) {
                        $success = "Fail";
                    }
                    ?>
                        <tr>
                        <th scope="row"><?= $onetrack['id'] ?></th>
                        <td><?= $onetrack['date'] ?></td>
                        <td><?= $onetrack['mise'] ?></td>
                        <td><?= $onetrack['cote'] ?></td>
                        <td><?= $success ?></td>
                        </tr>
                    <?php
                }
            ?>
            </tbody>
        </table>

    </div>    
</body>
</html>