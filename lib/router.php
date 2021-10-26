<?php
        if (isset($_REQUEST['controlleurs'])) {
            if ($_REQUEST['controlleurs'] == 'admin') {
                require_once(ROUTE_DIR.'controlleurs/admin.controlleur.php');
            }elseif ($_REQUEST['controlleurs'] == 'security') {
                require_once(ROUTE_DIR.'controlleurs/security.controlleur.php');
            }elseif ($_REQUEST['controlleurs'] == 'lecteur') {
                require_once(ROUTE_DIR.'controlleurs/lecteur.controlleur.php');
            }elseif ($_REQUEST['controlleurs'] == 'redacteur') {
                require_once(ROUTE_DIR.'controlleurs/redacteur.controlleur.php');
            }else{
                require_once(ROUTE_DIR.'controlleurs/lecteur.controlleur.php');            
            }
        }else {
            //require_once(ROUTE_DIR.'views/lecteur/catalogue.html.php');
            show_catalogue2();
           
        }
        function show_catalogue2(){
            $articles=find_all_Articles();
            require(ROUTE_DIR.'views/lecteur/catalogue.html.php');
        }
    ?>