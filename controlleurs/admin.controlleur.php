<?php 

    if ($_SERVER['REQUEST_METHOD']=='GET') {
        if (isset($_GET['views'])) {
            if ($_GET['views'] == 'liste.categorie') {
                show_liste_categorie();
            }elseif ($_GET['views'] == 'liste.article') {
                show_liste_article();
            }elseif ($_GET['views'] == 'add.article') {
                show_add_article();
            }elseif ($_GET['views'] == 'add.categorie') {
                show_add_categorie();
            }elseif ($_GET['views'] == 'liste.redacteur') {
                show_liste_redacteur();
            }elseif ($_GET['views'] == 'add.redacteur') {
                show_add_redacteur();
            }
        }
    }elseif ($_SERVER['REQUEST_METHOD']=='POST') {
        if (isset($_POST['action'])) {
            if ($_POST['action'] == 'add.article') {
                add_article($_POST,$_FILES);
            }elseif ($_POST['action'] == 'add.categorie') {
                add_categorie($_POST);
            }elseif ($_POST['action'] == 'add.redacteur') {
                add_redacteur($_POST,$_FILES);
            }
        }
    }

    function show_liste_categorie(){
        $categories=find_all_categories();
        require(ROUTE_DIR.'views/admin/liste.categorie.html.php');
    }
    function show_liste_article(){
        $articles=find_all_Articles();
        require(ROUTE_DIR.'views/redacteur/liste.article.html.php');
    }
    function show_add_article(){
        $categories=find_all_categories();
        require(ROUTE_DIR.'views/redacteur/add.article.html.php');
    }
    function show_add_categorie(){
        require(ROUTE_DIR.'views/admin/add.categorie.html.php');
    }
    function show_add_redacteur(){
        require(ROUTE_DIR.'views/admin/add.redacteur.html.php');
    }
    function show_liste_redacteur(){
        $redacteurs=find_all_redacteurs();
        require(ROUTE_DIR.'views/admin/liste.redacteur.html.php');
    }
    function add_article(array $post,array $files):void{
        $arrayError=[];
        extract($post);
        validefield($titre,'titre',$arrayError);
        validefield($description,'description',$arrayError);
        if ($categorie=='0') {
            $arrayError['categorie'] = 'veillez selectionner';
            $_SESSION['arrayError'] = $arrayError;
        }
        $file_name=$_FILES["avatar"]["name"];
        $file_name_tmp=$_FILES["avatar"]["tmp_name"];
      //  $target_dir = UPLOAD_ARTICLES;
       // $target_file = $target_dir . basename($_FILES["avatar"]["name"]);
       // valide_image($files,'avatar',$arrayError,$target_file);
      
        if (form_valid($arrayError)) {
            
            $articles=[
                $titre,
                $description,
                'brouillon',
                (int)$_SESSION['userConnect']['id_utilisateur']
            ];
         //  var_dump(insert_artiicle($articles)); 
          $id_article = insert_article($articles);
            $photos=[
                $file_name,
                $id_article
            ];
            if (!file_exists(UPLOAD_ARTICLES .$file_name)) {
                move_uploaded_file($file_name_tmp, UPLOAD_ARTICLES.$file_name);
             }
             insert_photo($photos);
            $articles_cathegorie=[
                (int)$categorie,
                $id_article
            ];
           // var_dump(insert_into_article_categorie($articles_cathegorie)); 
            insert_into_article_categorie($articles_cathegorie);
            header('location:'.WEB_ROUTE.'?controlleurs=admin&views=liste.article');
            exit;
        }else {
            $_SESSION['arrayError']=$arrayError;
            header('location:'.WEB_ROUTE.'?controlleurs=admin&views=add.article');
            exit;
        }
    }
    function add_categorie(array $post):void{
        $arrayError=[];
        extract($post);
        validefield($nom_categorie,'nom_categorie',$arrayError);
        if (form_valid($arrayError)) {

            if (empty($post['id_categorie'])) {
                insert_into_categorie($nom_categorie);
                header('location:'.WEB_ROUTE.'?controlleurs=admin&views=liste.categorie');
                exit;
            }else {
                
            }
        }else {
            $_SESSION['arrayError'] = $arrayError;
            header('location:'.WEB_ROUTE.'?controlleurs=admin&views=add.categorie');
            exit;
        }
    }
    function add_redacteur(array $post,array $files):void{
        $arrayError=[];
        extract($post);
        $file_name=$files["avatar"]["name"];
        $file_name_tmp=$files["avatar"]["tmp_name"];
        valide_user_name($nom,'nom',$arrayError);
        valide_user_name($prenom,'prenom',$arrayError);
        valide_field_mail($login,'login',$arrayError);
        validation_password($password,$arrayError,'password');
        if ($password!=$confirm_password) {
            $arrayError['confirm'] = 'le mot de passe est different';
            $_SESSION['arrayError']=$arrayError;
        }

         $user=login_exist($login);
         if ($user!=false) {
            $arrayError['loginExist'] = 'ce login exist deja';
            $_SESSION['arrayError']=$arrayError;
         }
         if (form_valid($arrayError)) {
             /* if (empty($file_name)) {
                $user=[
                    $nom,
                    $prenom,
                    $login,
                    1,
                    NULL
                 ];
             }else {
                $user=[
                    $nom,
                    $prenom,
                    $login,
                    1,
                    $file_name
                 ];
             } */
           
             $user=[
                $nom,
                $prenom,
                $login,
                $password,
                1,
                $avatar
             ];
            
             if (!file_exists(IMAGE_USERS .$file_name)) {
                 move_uploaded_file($file_name_tmp, IMAGE_USERS.$file_name);
             }

              inscrire_utilisateur($user);
            header('location:'.WEB_ROUTE.'?controlleurs=admin&views=liste.redacteur');
            exit;
         }else {
             $_SESSION['arrayError'] = $arrayError;
            header('location:'.WEB_ROUTE.'?controlleurs=admin&views=add.redacteur');
            exit;
         }
    }
?>