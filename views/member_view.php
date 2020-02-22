<?php include_once "function/connexion.php" ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include_once "views/include/head.php"?>
    <title>Member</title>
</head>
<body>
    <?php include_once "views/include/header.php"?>
    <section>
    
    <?php  $contacts = getBdd();?>
        
    <?php foreach ($contacts as $contact) :?>
        <article> 
            <p> <?= $contact["prenom"] ?> </p>   
            <p> <?= $contact["nom"] ?> </p>   
            <p> <?= $contact["email"] ?> </p>   
            <p> <?= $contact["message"] ?> </p>   
            <p> <?= $contact["date"] ?> </p>   
        </article>
    <?php endforeach?>
   
    
    </section>
</body>
    <?php include_once "views/include/footer.php"?>
</html>