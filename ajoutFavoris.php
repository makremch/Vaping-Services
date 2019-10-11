<?php
include_once("config.php");


if($_GET["action"] == 'ADDFav'){
    $sql="INSERT INTO `favoris`(`id_article`, `id_publicateur`,`image`) VALUES ('".$_GET["id_article"]."','".$_GET["id_publicateur"]."','".$_GET["image"]."')";
    $result = mysqli_query($mysqli,$sql);

       echo "resultat : ".$result;

}


if ($_GET["action"] == 'GetFavoris'){

$sql = "select * from favoris where id_article ='".$_GET["id_article"]."' and id_publicateur ='".$_GET["id_publicateur"]."'";
$stmt = $conn->prepare($sql);
$stmt->execute();
 echo json_encode($stmt->fetchAll());
}

if ($_GET["action"] == 'DeleteFavoris'){
$sql = "DELETE FROM `favoris` where id_article ='".$_GET["id_article"]."' and id_publicateur ='".$_GET["id_publicateur"]."'";
 $result = mysqli_query($mysqli,$sql);
       echo "resultat : ".$result;
}
 ?>
