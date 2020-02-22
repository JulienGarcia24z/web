<?php
$ip = strval($_SERVER["REMOTE_ADDR"]);
// Verification des champs.
include_once "function/bddPass.php";

if(!empty($_POST) ){

        extract($_POST);
        $erreur = [];
    
    // Si les champs sont vides : Creer une erreur
        if(empty($nom)){
            $erreur['nom'] = "Le nom est requis";
        }
        if(empty($prenom)){
            $erreur['prenom'] = "Le prenom est requis";
        }
        if(empty($email)){
            $erreur['email'] = "L'email est requis";
        
        if(empty($message)) {
            $erreur["message"] ="Un petit message s'il-vous plait";
        }

         // Si le champ email est rempli: verifier qu'il soit valide
        }elseif( !filter_var( $email, FILTER_VALIDATE_EMAIL )){
            $erreur['email'] =" Adresse email invalide";
        }else{

            try{
                 // Connexion
                $bdd = new PDO("mysql:host=".$dbHost.";dbname=".$mydbname,$dbUser, $dbMdp );
                $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            }catch(Exception $e){
                die("Error". $e->getMessage());
            }
        
        // Insert data.
        $statement = $bdd->prepare("INSERT INTO user_contact(nom,prenom,email,message,ipAdresse) VALUE(?, ?, ?, ?,?)");
        
        $statement->execute(array($nom,$prenom,$email,$message,$ip));
    }
        
}   
?>