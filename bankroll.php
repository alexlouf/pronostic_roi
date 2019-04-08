<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('./inc/head.php') ?>
    <title>Bankroll</title>
</head>
<body>
    <?php include('./inc/nav.php') ?>
    <div class="container align-items-center d-flex flex-column">
        <h1>Calcul des mises</h1>
        <form>
            <div class="form-group">
                <label for="capital">Capitale</label>
                <input type="number" class="form-control" id="capital" placeholder="200">
            </div>
            <div class="form-group">
                <label for="pourcent">Pourcentage bankroll</label>
                <input type="number" class="form-control" id="pourcent" placeholder="3">
            </div>
            <button type="submit" class="btn btn-primary" id="calcbankroll">Calculer</button>
        </form>
        <div class="mt-3 alert" id="result"></div>
    </div>    

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="./assets/js/calcul_bankroll.js"></script>
</body>
</html>