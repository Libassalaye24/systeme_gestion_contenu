<?php 
    define("WEB_ROUTE" , "http://localhost:8001/");
       
    //define("WEB_ROUTE" , "http://libasse24.alwaysdata.net/");
    define("HOST_DB","localhost");
            define("ROUTE_DIR" , str_replace('public' ,'',$_SERVER['DOCUMENT_ROOT']));
            //connexion avec la base de donnee
            define("USER_DB","root",);
            define('PASSWORD_DB','Libasse');
            define("DB_CHAINE_CONNECTION","mysql:dbname=systeme_gestion_contenu;host=".HOST_DB);
            ///////////////////////////////
            define("UPLOAD_ARTICLES" , ROUTE_DIR. 'public/img/uploads/articles/');
            define("NBR_PAGE",2);
            define("IMAGE_USERS",ROUTE_DIR.'public/img/uploads/users/');
            
?>