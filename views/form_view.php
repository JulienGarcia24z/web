<?php include_once "views/include/error.php"?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include_once "views/include/head.php"?>
    <title>Commander</title>
</head>
<body>
    <?php include_once "views/include/header.php"?>
    <section>
        <article>
            <h1>Precommander votre 6D mark II</h1>
            <div class="blocForm">
                <!-- Verifie si la variable erreur existe et s'il n'est pas vide!-->
                <?php if(isset($erreur["email"])): ?>
                    <div class="alert alert-danger"> <?= $erreur['nom']?></div>
                    <div class="alert alert-danger"> <?= $erreur['prenom']?> </div>
                    <div class="alert alert-danger"> <?= $erreur['email']?> </div>
                    <div class="alert alert-danger"> <?= $erreur['message']?> </div>   
                <?php endif ?>
       
                <form class="form"  method="post" action="#">
                    <div>
                        <input type="text" name="nom" class="nom" placeholder="Nom...">
                    </div>
                    <div>
                        <input type="text" name="prenom" class="prenom" placeholder="Prenom...">
                    </div>
                    <div>
                        <input type="email" name="email" class="email" placeholder="E-mail...">
                    </div>
                    <div>
                        <textarea name="message" class="mgs" cols="30" rows="10" placeholder="Votre message..."></textarea>
                    </div>
                   <button>Commander</button>
                </form>
            </div>
        </article>
    </section>
</body>
    <?php include_once "views/include/footer.php"?>
</html>