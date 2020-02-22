
<?php include_once "views/include/errorFomAdmin.php"?>

<!DOCTYPE html>
<html leng="fr">
<head>
	<?php include_once "views/include/head.php"?>
	<title>Admin</title>
</head>
<body>
	<?php include_once "views/include/header.php"?>
	<section>
		<article>
			<h1>Admin </h1>	
			<?php if(isset($msg["mdpFa"])): ?>
			<div class="alert alert-danger"> <?= $msg['nomFa']?></div>
			<div class="alert alert-danger"> <?= $msg['mdpFa']?></div>
			<?php endif ?>
			
			<form action="" method="post">
				<div><input type="text" name="nomFa" class="nomFa" placeholder="Login..."></div>
				<div><input type="mdp" name="mdpFa" class="mdpFa" placeholder="Pass..."></div>
				<button>Valider</button>
			</form>
		</article>
	</section>
</body>
    <?php include_once "views/include/footer.php"?>
</html>