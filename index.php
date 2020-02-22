<?php
// Si il existe une page et si cette page n'est pas vide
if( isset($_GET['page']) AND !empty($_GET['page']) ){
    
    $page = trim( strtolower($_GET['page']) ) ;

}else{
    $page = 'home';
}
// Le dossier variable contienr tous les fichiers scanners
$allPages = scandir("views/");

if(in_array($page ."_view.php", $allPages) ){
   
    include_once "views/".$page."_view.php";

}else{
    function redirectionErreur404()
    {
      header('HTTP/1.0 404 Not Found');
      exit;
    }
    /** Exemple d'utilisation **/
    if(!file_exists('/pages/mapage.html'))
    {
      redirectionErreur404();
    }
}