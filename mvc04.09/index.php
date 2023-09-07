<?php 
    $pageUser = "Appli à améliorer selon le design pattern MVC";
    require_once("./app/core/views/header.php");
    require_once("./app/core/controllers/router.php");
?>

<!-- Le chemin du lien ci dessous n'est plus valide (puisque l'on se
     base sur l'index) : à vous de le mettre à jour en prenant en compte
     le controlleur et l'action adéquate.
!-->
<p>Cliquez <a href="index.php?controller=book&action=all">ici</a> pour accéder à notre bibliothèque</p>
<p>Cliquez <a href="index.php?controller=user&action=all">ici</a> pour accéder à nos utilisateurs</p>
<p>Cliquez <a href="index.php?controller=user&action=connect"></a> pour accéder à la page de connexion</p>
<?php
    require_once("./app/core/views/footer.php");
?>