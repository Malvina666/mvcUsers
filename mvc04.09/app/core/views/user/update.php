<?php
    $pageUser = "Modification d'un utilisateur";
?>

<h1>Modification d'un utilisateur <?= $user["name"] ?>&nbsp;:</h1>

<form action="index.php?controller=user&action=updateFirst" method="POST">
    <input type="text" name="nom" placeholder="Nom" value="<?= $user["nom"] ?>">
    <input type="text" name="prenom" placeholder="Nom" value="<?= $user["prenom"] ?>">
    <input type="email" name="email" placeholder="email">
   <input type="password" name="pwd" placeholder="Mot de passe">
   <input type="hidden" value="<?= $user["id"]; ?>" name="userID">
   
</form>