<?php 
 if (isset($_SESSION['arrayError'])) {
    $arrayError=$_SESSION['arrayError'];
    unset($_SESSION['arrayError']);
  }
 require_once(ROUTE_DIR.'views/imc/header.html.php'); ?>
<div class="container mt-4  ">
    <div class="row">
        <div class="col-md-5">
             <h4>Add Articles</h4>
        </div>
        <div class="col-md-7">
            <a name="" id="" class="btn btn-primary" href="<?=WEB_ROUTE.'?controlleurs=admin&views=liste.categorie'?>" role="button">Liste des categories <i class="fa fa-arrow-right" aria-hidden="true"></i> </a>
        </div>
    </div>
        <div class="card mt-3 ">
            <div class="card-body shadow  bg-white rounded">
                <h4 class="card-title">Categorie</h4>
                 <div class="column ">
                    <form action="<?=WEB_ROUTE;?>" method="post">
                        <input type="hidden" name="controlleurs" value="admin">
                        <input type="hidden" name="action" value="add.categorie">
                    <div class="row">
                        <div class="col-md-6 mt-3">
                            <div class="form-group">
                                <label for="">Nom Categorie</label>
                                <input type="text" name="nom_categorie" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                <small id="helpId" class="text-danger">
                                    <?=isset($arrayError['nom_categorie']) ? $arrayError['nom_categorie'] : "" ?>
                                </small>
                             </div>
                        </div>
                        <div class="col-md-6 mt-5">
                             <button type="submit" class="btn btn-primary ml-auto mr-3" name="ajouter">Ajouter</button>
                         </div>
                    </div>                   
                   
                    </form>
                </div>
            </div>
        </div>
</div>
<?php require_once(ROUTE_DIR.'views/imc/footer.html.php'); ?>
