<?php
include('./config/config.php');


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
        <form>
        <div class="form-group">
                <label for="date">Date du paris</label>
                <input type="date" class="form-control" id="date">
            </div>
            <div class="form-group">
                <label for="mise">Mise</label>
                <input type="number" class="form-control" id="mise" placeholder="8">
            </div>
            <div class="form-group">
                <label for="cote">Cote</label>
                <input type="number" class="form-control" id="cote" placeholder="1.3">
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                <label class="form-check-label" for="exampleRadios1">
                    Pass
                </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                    Fail
                </label>
                </div>
            <button type="submit" class="btn btn-primary" id="calcbankroll">Ajouter</button>
        </form>
        <div class="mt-3 alert" id="result"></div>
    </div>    
</body>
</html>