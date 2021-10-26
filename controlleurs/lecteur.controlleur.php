<?php 

    if ($_SERVER['REQUEST_METHOD']=='GET') {
        if (isset($_GET['views'])) {
            if ($_GET['views'] == 'catalogue') {
                show_catalogue();
            }
        }else{
            show_catalogue();
        }
    }elseif ($_SERVER['REQUEST_METHOD']=='POST') {

    }

   function show_catalogue(){
        $articles=find_all_Articles();
        require(ROUTE_DIR.'views/lecteur/catalogue.html.php');
    }
?>