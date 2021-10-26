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
            <a name="" id="" class="btn btn-primary" href="<?=WEB_ROUTE.'?controlleurs=admin&views=liste.article'?>" role="button">Liste articles <i class="fa fa-arrow-right" aria-hidden="true"></i> </a>
        </div>
    </div>
        <div class="card mt-3 ">
            <div class="card-body shadow p-3 mb-5 bg-white rounded">
                <h4 class="card-title">Title</h4>
                 <div class="column ">
                    <form action="<?=WEB_ROUTE?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="controlleurs" value="admin">
                        <input type="hidden" name="action" value="add.article">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Titre Article</label>
                                <input type="text" name="titre" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                <small id="helpId" class="text-danger">
                                    <?=isset($arrayError['titre']) ? $arrayError['titre'] : "" ?>
                                </small>
                             </div>
                        </div>
                        <div class="col-md-6 mt-1">
                            <div class="form-group">
                            <label for="">Categorie</label>
                            <select class="form-control" name="categorie" id="">
                            <option value="0">Selectionner</option>
                                <?php foreach($categories as $categorie): ?>
                                <option value="<?=$categorie['id_cathegorie']?>"><?=$categorie['nom_cathegorie']?></option>
                                <?php endforeach ?>
                            </select>
                                <small id="helpId" class="text-danger">
                                    <?=isset($arrayError['categorie']) ? $arrayError['categorie'] : "" ?>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                       <div class="col-12">
                       <div class="form-group">
                            <label for="exampleFormControlTextarea1">Description</label>
                             <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"></textarea>
                             <small id="helpId" class="text-danger">
                                    <?=isset($arrayError['description']) ? $arrayError['description'] : "" ?>
                             </small>
                         </div>
                       </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                              <label for=""></label>
                              <input type="file" class="form-control-file" name="avatar"  onchange="handleFiles(files)" id="upload" placeholder="" aria-describedby="fileHelpId">
                              <small id="fileHelpId" class="form-text text-danger">
                                    <?=isset($arrayError['avatar']) ? $arrayError['avatar'] : "" ?>
                                </small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>
                             
                              <label for="upload">
                                  <span id="preview"></span>
                              </label>
                            </div>
                         </div> 
                    </div>
                    <style>
                             #preview{
                                margin-top: 2%;
                                width: 50px;
                                display: inline-block;
                            }
                            #preview img{
                                width: 100%;
                            }
                    </style>
                    <div class="row">
                        <button type="subtmi" class="btn btn-primary ml-auto mr-3">Ajouter</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
</div>
<?php require_once(ROUTE_DIR.'views/imc/footer.html.php'); ?>
