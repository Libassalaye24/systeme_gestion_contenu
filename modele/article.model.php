<?php 
    function find_all_Articles():array{
        $pdo=ouvrir_connection_db();
        $sql='SELECT * from article';
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute();
        $user = $sth->fetchAll();
        fermer_connection_db($pdo);
        return $user;
    }
    function insert_article(array $articles):int{
        $pdo=ouvrir_connection_db();
        $sql=" INSERT INTO article (titre_article,description_article,etat_article,
                        id_user) 
                VALUES (?,?,?,?)";
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute($articles);
        $dernier_id = $pdo->lastInsertId();
        fermer_connection_db($pdo);
        return $dernier_id;
    }
    function insert_photo(array $photos):int{
        $pdo=ouvrir_connection_db();
        $sql=" INSERT INTO photo (nom_photo,id_article) 
                VALUES (?,?)";
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute($photos);
        $dernier_id = $pdo->lastInsertId();
        fermer_connection_db($pdo);
        return $dernier_id;
    }
    function insert_into_article_categorie(array $article_cathegorie):int{
        $pdo=ouvrir_connection_db();
        $sql=" INSERT INTO article_cathegorie (id_cathegorie,id_article) 
                VALUES (?,?)";
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute($article_cathegorie);
        $dernier_id = $pdo->lastInsertId();
        fermer_connection_db($pdo);
        return $dernier_id;
    }
?>