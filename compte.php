<?php session_start(); ?>
<!DOCTYPE html>
<html>
<?php include("header.php");?>
<body>
    <?php include("entete.php");?>
    <section class="container connexion">
        <form method="post" action="connexion.php">
            <div class="form-group">
                <label for="email">Entrez votre email</label>
                <input type="email" class="form-control" name="email" id="email"/>
            </div>
            <div class="form-group">
                <label for="password">Entrez votre mot de passe</label>
                <input type="password" class="form-control" name="password" id="password"/>
            </div>
            <button type="submit" class="btn btn-primary">Connectez-vous !</button>
        </form>
    </section>
    <?php include("pied.php");?>

</body>
</html>
