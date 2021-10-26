<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css" />
  <title>Gestion contenu</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,500&amp;subset=latin-ext" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus icon'></i>
        <div class="logo_name">Articles</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
    <?php if(!est_connect() || est_client()): ?> 
    <li>
       <a href="<?= WEB_ROUTE.'?controlleurs=lecteur&views=catalogue'?>">
         <i class='bx bx-user' ></i>
         <span class="links_name">Accueil</span> 
       </a>
       <span class="tooltip">Accueil</span>
     </li>
     <?php endif ?> 
     <?php if(est_responsable() || est_gestionnaire()): ?> 
      <li>
        <a href="<?= WEB_ROUTE.'?controlleurs=admin&views=liste.article'?>">
          <i class='bx bx-grid-alt'></i> 
          <span class="links_name">Articles</span>
        </a>
         <span class="tooltip">Articles</span>
      </li>
      <li>
       <a href="<?= WEB_ROUTE.'?controlleurs=commentaire&views=liste.commentaire'?>">
         <i class='bx bx-chat' ></i>
         <span class="links_name">Commentaires</span>
       </a>
       <span class="tooltip">Commentaires</span>
     </li>
      <?php endif ?> 
      <?php if(est_gestionnaire()): ?> 
     <li>
       <a href="<?= WEB_ROUTE.'?controlleurs=admin&views=liste.categorie'?>">
         <i class='bx bx-chat' ></i>
         <span class="links_name">Categories</span>
       </a>
       <span class="tooltip">Categories</span>
     </li>
     <li>
       <a href="<?= WEB_ROUTE.'?controlleurs=admin&views=liste.redacteur'?>">
         <i class='bx bx-pie-chart-alt-2' ></i> 
         <span class="links_name">Redacteurs</span>
       </a>
       <span class="tooltip">Redacteurs</span>
     </li>
     <?php endif ?> 

     <?php if(est_client()): ?> 
     <li>
       <a href="<?= WEB_ROUTE.'?controlleurs=lecteur&views=catalogue'?>">
         <i class='bx bx-heart' ></i>
         <span class="links_name">Favoris</span>
       </a>
       <span class="tooltip">Favoris</span>
     </li>
     <?php endif ?> 
   <?php if(est_connect()): ?> 
     <li class="profile">
         <div class="profile-details">
           <img src="profile.jpg" alt="profileImg">
           <div class="name_job">
             <div class="name">Prem Shahi</div>
             <div class="job">Web designer</div>
           </div>
         </div>
         <a href="<?=WEB_ROUTE.'?controlleurs=security&views=deconnexion'?>"><i class='bx bx-log-out' id="log_out" ></i>  </a>
     </li>
     <?php else: ?> 
      <li>
       <a href="<?=WEB_ROUTE.'?controlleurs=security&views=connexion'?>">
         <i class='bx bx-log-in' ></i>
         <span class="links_name">Se connnecter</span>
       </a>
       <span class="tooltip">Se connnecter</span>
     </li>
      <?php endif?> 
    </ul>
  </div>
  <section class="home-section">

