<?php 
 if (isset($_SESSION['arrayError'])) {
    $arrayError=$_SESSION['arrayError'];
    unset($_SESSION['arrayError']);
  }
 require_once(ROUTE_DIR.'views/imc/header.html.php'); ?>
<div class="container mt-4  ">
    <div class="row">
        <div class="col-md-5">
             <h4>Add Redacteur</h4>
        </div>
        <div class="col-md-7">
            <a name="" id="" class="btn btn-primary" href="<?=WEB_ROUTE.'?controlleurs=admin&views=liste.redacteur'?>" role="button">Liste redacteurs <i class="fa fa-arrow-right" aria-hidden="true"></i> </a>
        </div>
    </div>
        <div class="card mt-3 ">
            <div class="card-body shadow p-3 mb-5 bg-white rounded">
                <h4 class="card-title">Title</h4>
                 <div class="column ">
                    <form action="" method="post">
                        <input type="hidden" name="controlleurs" value="admin">
                        <input type="hidden" name="action" value="add.redacteur">
                        <?php if(isset($arrayError['loginExist'])): ?>
                            <div class="alert alert-danger" role="alert">
                                <strong><?=$arrayError['loginExist']?></strong>
                            </div>
                        <?php endif ?>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Nom</label>
                                <input type="text" name="nom" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                <small id="helpId" class="text-danger">
                                    <?=isset($arrayError['nom']) ? $arrayError['nom'] : "" ?>
                                </small>
                             </div>
                        </div>
                        <div class="col-md-6 ">
                            <div class="form-group">
                              <label for="">Prenom</label>
                                <input type="text" name="prenom" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                <small id="helpId" class="text-danger">
                                    <?=isset($arrayError['prenom']) ? $arrayError['prenom'] : "" ?>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                       <div class="col-md-6">
                            <div class="form-group">
                              <label for="">Login</label>
                              <input type="text" name="login" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                 <small id="helpId" class="text-danger">
                                    <?=isset($arrayError['login']) ? $arrayError['login'] : "" ?>
                                </small>
                            </div>
                       </div>
                       <div class="col-md-6">
                            <div class="form-group">
                              <label for="">Password</label>
                              <input type="text" name="password" id="" class="form-control" placeholder="" aria-describedby="helpId">
                              <small id="helpId" class="text-danger">
                                    <?=isset($arrayError['password']) ? $arrayError['password'] : "" ?>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                              <label for="">Confirm Password</label>
                              <input type="text" name="confirm_password" id="" class="form-control" placeholder="" aria-describedby="helpId">
                              <small id="helpId" class="text-danger">
                                    <?=isset($arrayError['confirm_password']) ? $arrayError['confirm_password'] : "" ?>
                                </small>
                            </div>
                        </div>
                        <div class="col-md-6 mt-3">
                            <div class="form-group">
                              <label for=""></label>
                              <input type="file" class="form-control-file" name="avatar" id="" placeholder="" aria-describedby="fileHelpId">
                              <small id="fileHelpId" class="form-text text-muted">
                                    <?=isset($arrayError['avatar']) ? $arrayError['avatar'] : "" ?>
                                </small>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <button type="submit" class="btn btn-primary ml-auto mr-3">Ajouter</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
</div>
<?php require_once(ROUTE_DIR.'views/imc/footer.html.php'); ?>
