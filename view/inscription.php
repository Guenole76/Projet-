<?php 
session_start();
?>
<!-- HEAD -->
<?php require __DIR__ . "/../header2.php"; ?>

 <?php require __DIR__ . "/../traitement_formulaire.php"; ?>
 
<div class="login">
<link rel="stylesheet" href="css/style.css">

    <form method="post" action="">
	
        <p class="titre">Adresse Mail</p>
        <p class="inscri">
            <input type="text" name="login" value="" placeholder=" Entrez votre Email" /></p>
        <p class="titre">Pseudo</p>
        <p class="inscri">
            <input type="text" name="pseudo" value="" placeholder="Entrez un Pseudo" /></p>
        <p class="titre">Mot de passe</p>
        <p class="inscri">
            <input type="password" name="password" value="" placeholder="Entrez un Mot de passe" />
        </p>
        <p class="titre">Valider le mot de passe</p>
        <p class="inscri">
            <input type="password" name="password_confirm" value="" placeholder="resaissiser votre Mot de passe" />
        </p>
 
        <p class="submit"><input type="submit" name="commit" value="Validé"></p>
    </form>
</div>

<?php require __DIR__ . "/../footer.php"; ?>    

