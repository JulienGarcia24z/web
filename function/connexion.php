<?php

// connexion bdd
function connexion(){
    include_once "bddPass.php";
    try{
        // Connexion
       $bdd = new PDO("mysql:host=".$dbHost.";dbname=".$mydbname,$dbUser, $dbMdp );
       $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
   }catch(Exception $e){
        die("Error". $e->getMessage());
    }
    
    $bddConnect = $bdd->prepare("SELECT * FROM admin"); 
    $bddConnect->execute();
    $bddConnect = $bddConnect->fetch();
    
    return $bddConnect;
}

// recup bdd
function getBdd(){
    include_once "bddPass.php";
    try{
        // Connexion
       $bdd = new PDO("mysql:host=".$dbHost.";dbname=".$mydbname,$dbUser, $dbMdp );
       $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
   }catch(Exception $e){
        die("Error". $e->getMessage());
    }
    
    $sql = "SELECT prenom,nom,message,email,date FROM user_contact";

    $statement = $bdd->query($sql, \PDO::FETCH_ASSOC);


    return $statement;
}
