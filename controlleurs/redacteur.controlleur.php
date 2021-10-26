<?php 

    if ($_SERVER['REQUEST_METHOD']=='GET') {
        if (isset($_GET['views'])) {
            if ($_GET['views'] == 'liste.article') {
                require(ROUTE_DIR.'views/redacteur/liste.article.html.php');
            }
        }
    }elseif ($_SERVER['REQUEST_METHOD']=='POST') {

    }

?>