<?php 

    if ($_SERVER['REQUEST_METHOD']=='GET') {
        if (isset($_GET['views'])) {
            if ($_GET['views'] == 'connexion') {
                require(ROUTE_DIR.'views/security/connexion.html.php');
            }elseif ($_GET['views'] == 'inscription') {
                require(ROUTE_DIR.'views/security/inscription.html.php');
            }elseif ($_GET['views'] == 'deconnexion') {
                deconnexion();
            }
        }
    }elseif ($_SERVER['REQUEST_METHOD']=='POST') {
        if (isset($_POST['action'])) {
            if ($_POST['action'] == 'connexion') {
                connexion($_POST['login'],$_POST['password']);
            }elseif ($_POST['action']=='inscription') {
                // add_user($_POST);
                 //inscription($_POST);
            }
        }
    }

    function connexion(string $login,string $password):void{
        $arrayError=array();
       valide_field_mail($login,'login',$arrayError);
        validation_password($password,$arrayError,'password');
       
      if (form_valid($arrayError)) {
       
        $user =  find_user_by_login_password($login,$password);
      //  var_dump($user); die;
        if ($user==false) {
            $arrayError['invalide']='login ou password incorrecte';
            $_SESSION['arrayError']=$arrayError;
            header('location:'.WEB_ROUTE.'?controlleurs=security&views=connexion');
            exit();
        }else {
          $_SESSION['userConnect'] = $user;
         
            if ($user['nom_role']=='lecteur') {
              header('location:'.WEB_ROUTE.'?controlleurs=lecteur&views=catalogue');
              exit();
            }elseif ($user['nom_role']=='admin') {
                header('location:'.WEB_ROUTE.'?controlleurs=admin&views=liste.categorie');
                exit();
            }else {
                header('location:'.WEB_ROUTE.'?controlleurs=redacteur&views=liste.article');
                exit();
            }
         
        }
      }else {
        $_SESSION['arrayError']=$arrayError;
        header('location:'.WEB_ROUTE.'?controlleurs=security&views=connexion');
        exit();
      }
      
     }
        
    function deconnexion():void{
        unset($_SESSION['userConnect']);
        header('location:'.WEB_ROUTE);
        exit();
    
    }
?>