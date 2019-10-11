<?php
include_once("config.php");




if($_GET["action"] == 'ADDPOST'){
    $sql = "INSERT INTO `articles`(`nomprenom` , `description`, `date`, `time`, `prix`, `idpublicateur` ,`categorie`, `image` ,`image_publicateur`,`ville`,`lat`,`lng` ,`videoid`) VALUES
     ('".$_GET["nomprenom"]."','".$_GET["description"]."','".$_GET["date"]."','".$_GET["time"]."','".$_GET["prix"]."','".$_GET["idpublicateur"]."','".$_GET["categorie"]."','".$_GET["image"]."','".$_GET["image_publicateur"]."'
     ,'".$_GET["ville"]."','".$_GET["latitude"]."','".$_GET["langitude"]."','".$_GET["videoid"]."')";
    $result = mysqli_query($mysqli,$sql);
    echo $sql;
    echo "resultat : ".$result;
}


 ?>