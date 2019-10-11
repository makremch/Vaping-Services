<?php
include_once("config.php");


if ($_GET["action"] == 'AffichageAllArticles'){

$sql = "SELECT * FROM articles ORDER BY id DESC";

$stmt = $conn->prepare($sql);
$stmt->execute();
 echo json_encode($stmt->fetchAll());
}

if ($_GET["action"] == 'AffichageArticlesWithID'){

$sql = "SELECT * FROM articles WHERE ID = '".$_GET["id"]."' ORDER BY id DESC";

$stmt = $conn->prepare($sql);
$stmt->execute();
 echo json_encode($stmt->fetchAll());
}


if ($_GET["action"] == 'AffichageArticlesWithType'){

// * FROM articles WHERE ID = '".$_GET["id"]."' ORid DESC";

$sql = "SELECT * FROM articles WHERE categorie = '".$_GET["categorie"]."' ORDER BY id DESC";
$stmt = $conn->prepare($sql);
$stmt->execute();
 echo json_encode($stmt->fetchAll());
}





//$sql = "SELECT * FROM articles WHERE categorie = '".$_GET["categorie"]."' ORDER BY id DESC";

if ($_GET["action"] == 'MesArticles'){

    $sql = "SELECT * FROM articles WHERE idpublicateur = '".$_GET["id_publicateur"]."' ORDER BY id DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
     echo json_encode($stmt->fetchAll());
}

if ($_GET["action"] == 'MesArticlesFavoris'){

    $sql = "SELECT * FROM favoris WHERE id_publicateur = '".$_GET["id_publicateur"]."' ORDER BY id DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
     echo json_encode($stmt->fetchAll());
}



 ?>
