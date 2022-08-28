<?php
include ('traduction/localization.php');
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <title>Accueil</title>
    </head>
    <body>
    <?php include('includes/header.php'); ?>
    <section style="text-align: center;">
        <h1>Validez-vous votre don ?</h1>
        <br>
        <form action="#" method="post">
            <label for="prix">Montant :</label>
            <input type="text" name="prix" id="prix" value="100" /> €
<br>
<br>
            <button class="w-100 btn btn-lg btn-danger" style="background-color:#22a311; border-color:#22a311" href="#">Procéder au don</button>
        </form>
        <a style="color: #22a311;" style="text-align: center;" href="index.php">Non</a>
    <script src="js/function.js"></script>
</section>
<?php include('includes/footer.php'); ?>
    </body>
 
</html>

