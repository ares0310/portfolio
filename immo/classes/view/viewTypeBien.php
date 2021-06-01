<?php
require_once "../model/modelTypeBien.php";
class ViewTypeBien
{
    public static function typeBienForm()
    {
?>
        <div class="container p-5">
            <div id="erreurs"></div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="reset" method="post">
                <div class="form-group">
                    <input type="text" id="libelle" name="libelle" class="form-control" placeholder="Libelle">
                </div>
                <div>
                    <button type="submit" id="valider" name="valider" class="btn btn-primary">Valider</button>
                </div>

            </form>

        </div>
    <?php
    }
    public static function listeTypeBien()
    {
        $typeRefs = ModelTypeBien::listeTypeBien();

    ?>
        <table class="container">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">type_bien</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($typeRefs as $typeRef) {
                ?>
                    <tr>
                        <th><?php echo $typeRef["id"] ?></th>
                        <td><?php echo $typeRef["libelle"] ?></td>
                        <td><a type="button" class="btn btn-danger" id="modifier" href="ModifTypeBien.php?id=<?php echo $typeRef["id"] ?>" role="button" data-toggle="modal" data-target="#modal-modif">
                                Modifier profil
                            </a></td>
                        <!-- <td><a class="btn btn-primary" target="_blank" href="ModifTypeBien.php?id=<?php echo $typeRef["id"] ?>&libelle=<?php echo $typeRef["libelle"] ?>" role="button">Modifier TypeRef</a></td> -->
                        <td><a class="btn btn-danger" target="_blank" href="SuppressionTypeBien.php?id=<?php echo $typeRef["id"] ?>" role="button">Supprimer TypeRef</a></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <!-- Modal modifier profil-->

        <div class="modal fade modal-modif " id="modal-modif" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="modal-modifLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-modifLabel">Modif Type Bien</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    </div>
                </div>
            </div>
        </div>
    <?php
    }


    public static function modifTypeBien($id)
    {
        $typeBien = ModelTypeBien::getTypeBienById($id);
     
    ?>
        <div class="p-5">
            <div id="erreurs"></div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" name="modif_type_bien" id="modif_type_bien" method="post">
                <div class="form-group">
                    <input type="hidden" id="id" name="id" class="form-control" value="<?php echo $typeBien["id"] ?>">
                </div>
                <div class="form-group">
                    <input type="text" id="libelle" name="libelle" class="form-control" value="<?php echo $typeBien["libelle"] ?>" placeholder="Libelle">
                </div>
                <div>
                    <button type="submit" id="valider" name="valider" class="btn btn-primary lien-modif">Valider</button>
                </div>
            </form>

        </div>
<?php
    }
}
?>