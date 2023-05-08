<?php
$path = $_POST['path']; // obtenir le chemin du fichier à partir des données POST
if(file_exists($path)){
    if(unlink($path)){
        echo "Fichier supprimé avec succès.";
    }else{
        echo "Erreur lors de la suppression du fichier.";
    }
}else{
    echo "Le fichier n'existe pas.";
}
?>