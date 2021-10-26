<?php 

function find_all_categories():array{
    $pdo=ouvrir_connection_db();
    $sql="SELECT * FROM `cathegorie` ";
    $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $sth->execute();
    $user = $sth->fetchAll();
    fermer_connection_db($pdo);
    return $user;
}
function insert_into_categorie(string $nom_categorie):int{
    $pdo=ouvrir_connection_db();
    $sql="INSERT INTO `cathegorie` (`nom_cathegorie`) VALUES (?);";
    $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $sth->execute(array($nom_categorie));
    $dernier_id = $pdo->lastInsertId();
    fermer_connection_db($pdo);
    return $dernier_id;
}
?>