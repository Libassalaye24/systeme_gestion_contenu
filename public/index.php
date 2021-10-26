<?php 
    require(dirname(__DIR__)."/config/constante.php");
    require(dirname(__DIR__)."/config/require.php");
    require(dirname(__DIR__)."/config/pattern.php");
    open_session();

    
    require(ROUTE_DIR.'lib/router.php');
   
   
?>
