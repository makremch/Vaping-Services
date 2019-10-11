<?php
include_once("config.php");



if ($_GET["action"] == 'Authentification'){

$sql = "select * from login where email ='".$_GET["email"]."' AND password='".$_GET["password"]."'";

$stmt = $conn->prepare($sql);
$stmt->execute();
 echo json_encode($stmt->fetchAll());
}

if ($_GET["action"] == 'AuthentificationFacebookTest'){

$sql = "select * from login where idfb ='".$_GET["idfb"]."'";

$stmt = $conn->prepare($sql);
$stmt->execute();
 echo json_encode($stmt->fetchAll());
}

if($_GET["action"] == 'Inscription'){
    $sql = "INSERT INTO `login`(`idfb`,`nom`, `prenom`, `email`, `password`, `localisation`, `naissance`, `tel`, `image`)
     VALUES ('".$_GET["idfb"]."','".$_GET["nom"]."','".$_GET["prenom"]."','".$_GET["email"]."','".$_GET["password"]."','".$_GET["localisation"]."','".$_GET["naissance"]."','".$_GET["tel"]."','".$_GET["image"]."')";
    $result = mysqli_query($mysqli,$sql);
    $last_id = $mysqli->insert_id;
    echo "[{'id':'$last_id','0':'$last_id'}]";
}



if ($_GET["action"] == 'GETPROFILE'){

$sql = "select * from login where id ='".$_GET["id"]."'";

$stmt = $conn->prepare($sql);
$stmt->execute();
 echo json_encode($stmt->fetchAll());
}


if ($_GET["action"] == 'updateImage')
{
        $sql = "UPDATE `login` SET `image`='".$_GET["image"]."' WHERE id ='".$_GET["id"]."'";
        $result = mysqli_query($mysqli,$sql);
}

if ($_GET["action"] == 'updatePWD')
{
        $sql = "UPDATE `login` SET `password`='".$_GET["pwd"]."' WHERE email ='".$_GET["email"]."'";
        $result = mysqli_query($mysqli,$sql);
}

 ?>
