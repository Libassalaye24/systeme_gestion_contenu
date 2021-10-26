<?php require_once(ROUTE_DIR.'views/imc/header.html.php'); ?>
<div class="container mt-4  ">
    <div class="row">
        <div class="col-md-5">
             <h4>Liste des categories</h4>
        </div>
        <div class="col-md-7">
            <a name="" id="" class="btn btn-primary" href="<?=WEB_ROUTE.'?controlleurs=admin&views=add.categorie'?>" role="button"><i class="fa fa-plus" aria-hidden="true"></i> Ajout categorie</a>
        </div>
    </div>
    <div class="row mt-5">
        <div class="">
            <div class="table-responsive">
                <table class="table  shadow p-3 mb-5 bg-white ">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom Categorie</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; foreach($categories as $categorie): ?>
                        <tr>
                            <td scope="row"><?=$i?></td>
                            <td>
                                <?= $categorie['nom_cathegorie'] ?>
                            </td>
                            <td>
                                <a name="" id="" class="btn btn-primary" href="#" role="button"><i class="fa fa-edit"></i> Modifier</a>
                                <a name="" id="" class="btn btn-primary" href="#" role="button"><i class="fa fa-trash"></i> Delete</a>
                            </td>
                        </tr>
                       <?php $i++; endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php require_once(ROUTE_DIR.'views/imc/footer.html.php'); ?>
