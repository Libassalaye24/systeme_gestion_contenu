<?php require_once(ROUTE_DIR.'views/imc/header.html.php'); ?>
<div class="container mt-4  ">
    <div class="row">
        <div class="col-md-5">
             <h4>Liste des redacteurs</h4>
        </div>
        <div class="col-md-7">
            <a name="" id="" class="btn btn-primary" href="<?=WEB_ROUTE.'?controlleurs=admin&views=add.redacteur'?>" role="button"><i class="fa fa-plus" aria-hidden="true"></i> Ajout redacteur</a>
        </div>
    </div>
    <div class="row mt-5 ">
            <form class="form-inline">
                <label class="mr-sm-2" for="inlineFormCustomSelect">Etat</label>
                    <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
                        <option selected value="1">Publier</option>
                        <option value="2">Brouillon</option>
                        <option value="3">Deplublier</option>
                    </select>
                
                <label class=" mb-2 mr-sm-2 mb-sm-0"> Date publication     </label>
                    <input type="date" name="" class="form-control" id="">

            <button type="submit" class="btn btn-primary ml-4">Filtrer <i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
    </div>
    <div class="row mt-5">
      
                <table class="table  shadow  bg-white ">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Login</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($redacteurs as $redacteur): ?>
                        <tr>
                            <td class="">
                                <?= $redacteur['nom'] ?>
                            </td>
                            <td>
                                <?= $redacteur['prenom'] ?>
                            </td>
                            <td>
                                <?= $redacteur['login'] ?>
                            </td>
                           
                            <td>
                                <a name="" id="" class="btn btn-primary" href="#" role="button"><i class="fa fa-edit"></i> Modifier</a>
                                <a name="" id="" class="btn btn-primary" href="#" role="button"><i class="fa fa-trash"></i> Delete</a>
                            </td>
                        </tr>
                       <?php endforeach ?>
                    </tbody>
                </table>
  
        </div>
                     <div class="row">
                        <nav aria-label="..." class="">
                            <ul class="pagination pagination-lg">
                            <li class="page-item">
                                     <a class="page-link" href="#">Previous</a>
                                 </li>
                                <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">1</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                     <a class="page-link" href="#">Next</a>
                                 </li>
                            </ul>
                        </nav>
                     </div>
    </div>
<?php require_once(ROUTE_DIR.'views/imc/footer.html.php'); ?>
