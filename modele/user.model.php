<?php 

function inscrire_utilisateur(array $user):int{
    $pdo=ouvrir_connection_db();
    $sql=" INSERT INTO Utilisateur (nom,prenom,login,
                    password,id_role,nom_image) 
            VALUES (?,?,?,?,?,?)";
    $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $sth->execute($user);
    $dernier_id = $pdo->lastInsertId();
    fermer_connection_db($pdo);
    return $dernier_id;
}

function login_exist(string $login):array{
    $pdo=ouvrir_connection_db();
    $sql='SELECT * from Utilisateur u
            where u.login = ?';
    $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $sth->execute(array($login));
    $user = $sth->fetchAll();
    fermer_connection_db($pdo);
    return $user;
}

function find_user_by_login_password($login,$password){
    $pdo=ouvrir_connection_db();
    $sql='SELECT * FROM `Utilisateur` u,role ro where 
            u.id_role=ro.id_role and
            u.login=? and u.password=?';
    $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $sth->execute(array($login,$password));
    $user = $sth->fetch(PDO::FETCH_ASSOC);
    fermer_connection_db($pdo);
    return $user;
}

function find_all_redacteurs(){
    $pdo=ouvrir_connection_db();
    $sql="SELECT * FROM `Utilisateur` u,role ro where 
            u.id_role=ro.id_role and
            ro.nom_role=?";
    $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $sth->execute(array('redacteur'));
    $redacteur = $sth->fetch(PDO::FETCH_ASSOC);
    fermer_connection_db($pdo);
    return $redacteur;
}
?>
