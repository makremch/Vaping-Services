<?php
include_once("config.php");


if($_GET["action"]=='afficherAllReviews'){
  $sql = "SELECT * FROM `reviews` WHERE `idPublication` = ".$_GET['idPublication'];
  
 $stmt = $conn->prepare($sql);
  $stmt->execute();
   echo json_encode($stmt->fetchAll());
}


if($_GET["action"] == 'ajouterReviewPublication'){
    $sqll =  "SELECT id FROM `reviews` WHERE idUser= '".$_GET["id_user"]."'AND idPublication='".$_GET["id_publication"]."'" ;
    $stmt = $conn->prepare($sqll);
    $stmt->execute();
    $res = $stmt->fetchAll();
    if(sizeof($res)>0) {
      $id = $res[0]["id"] ;
      $sql = "UPDATE `reviews` SET `note`='".$_GET["valeur"]."',`commentaire`='".$_GET["commentaire"]."' WHERE id='".$id."'";

    }
    else {

      $sql = "INSERT INTO `reviews`(`idUser`, `idPublication`, `note`, `commentaire`) VALUES ('".$_GET["id_user"]."','".$_GET["id_publication"]."','".$_GET["valeur"]."','".$_GET["commentaire"]."')";
	
    }
    $result = mysqli_query($mysqli,$sql);
    echo "resultat : ".$result;
}


if($_GET["action"] == 'ADDavis'){
    $sqll =  "SELECT id from `avis` where id_user= '".$_GET["id_user"]."'and id_publication='".$_GET["id_publication"]."'" ;
    $stmt = $conn->prepare($sqll);
    $stmt->execute();
    $res = $stmt->fetchAll();
    if(sizeof($res)>0) {
      $id = $res[0]["id"] ;
      $sql = "UPDATE `avis` SET `valeur`='".$_GET["valeur"]."' WHERE id='".$id."'";
    }
    else {

      $sql = "INSERT INTO `avis`(`id_user`, `id_publication`, `valeur`) VALUES ('".$_GET["id_user"]."','".$_GET["id_publication"]."','".$_GET["valeur"]."')";

    }
    $result = mysqli_query($mysqli,$sql);
    echo "resultat : ".$result;
}

if ($_GET["action"] == 'affichageSommeRating'){
$idPublication = $_GET["idPublication"];
$sql = "SELECT AVG(valeur) FROM `avis` WHERE `id_publication`=" . $idPublication;
$stmt = $conn->prepare($sql);
$stmt->execute();
 echo json_encode($stmt->fetchAll());
}


if ($_GET["action"] == 'myRating'){
$sql =  "SELECT * from `avis` where id_user= '".$_GET["id_user"]."' and id_publication='".$_GET["id_publication"]."'" ;

$stmt = $conn->prepare($sql);
$stmt->execute();
 echo json_encode($stmt->fetchAll());
}

if ($_GET["action"] == 'topRated')
{
    $sql = "SELECT * from login left join (SELECT AVG(moyenne) as avrg,idpublicateur FROM articles LEFT JOIN (SELECT AVG(valeur) as moyenne,id_publication as idp FROM avis Group BY id_publication) averages ON articles.id = averages.idp GROUP by idpublicateur ) loginAvg ON login.id = loginAvg.idpublicateur WHERE avrg>0 ORDER by avrg DESC";
     $stmt = $conn->prepare($sql);
     $stmt->execute();
     echo json_encode($stmt->fetchAll());

}





 ?>
