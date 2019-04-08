<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('./inc/head.php') ?>
    <title>Calcul ROI</title>
</head>
<body>
    <?php include('./inc/nav.php') ?>
    <div class="container align-items-center d-flex flex-column">
        <h1>Estimation pronostics</h1>
        <form>
            <div class="form-group">
              <label for="capital">Capitale initial</label>
              <input type="number" class="form-control" id="capital" placeholder="200">
            </div>
            <div class="form-group">
              <label for="cote">Cote moyenne journalière</label>
              <input type="number" class="form-control" id="cote" placeholder="1.31">
            </div>
            <div class="form-group">
                <label for="bankroll">Pourcentage capital joué par jour</label>
                <input type="number" class="form-control" id="bankroll" placeholder="14">
            </div>
            <div class="form-group">
                <label for="month">Nombre de mois simulés</label>
                <input type="number" class="form-control" id="month" placeholder="12">
            </div>
            <div class="form-group">
                <label for="day">Nombre de jours joués dans le mois</label>
                <input type="number" class="form-control" id="day" placeholder="15">
            </div>
            <div class="form-group">
                <label for="success">Pourcentage de réussite des pronos</label>
                <input type="number" class="form-control" id="success" placeholder="92">
            </div>
            <div class="form-group">
                <label for="price">Prix de l'abonnement par mois</label>
                <input type="number" class="form-control" id="price" placeholder="30">
            </div>
            <div class="form-group">
                <label for="simu">Nombre de simulations (calcul de moyenne)</label>
                <input type="number" class="form-control" id="simu" placeholder="100">
                <small id="emailHelp" class="form-text text-muted">Attention un trops gros chiffre entraine un ralentissement du navigateur</small>
            </div>
            <button type="submit" class="btn btn-primary" id="calcroi">Estimer mon ROI</button>
          </form>
          <div class="mt-3 alert" id="result"></div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="./assets/js/renta_safe_prono.js"></script>
</body>
</html>