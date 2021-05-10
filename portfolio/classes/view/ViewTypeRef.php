<?php
require_once "../model/ModelSocial.php";
require_once "../view/ViewTypeSoc.php";
require_once "../model/ModelTypeSoc.php";
require_once "../model/ModelTypeRef.php";
class ViewTypeRef
{
    public static function ajoutTypeRef()
    {
?>
        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form">
                <div class="col-3">
                    <input type="text" name="type_ref" id="soc" class="form-control" aria-describedby="soc" placeholder="type_ref" required>
                </div>
                <div class="col-3">
                    <input type="text" name="support" id="soc" class="form-control" aria-describedby="soc" placeholder="support" required>
                </div>
                <button type="submit" name="valider" class="btn btn-primary">Submit</button>
            </div>
        </form>
    <?php
    }
    public static function listeTypeRef()
    {
        $typeRefs = ModelTypeRef::listeTypeRef();

    ?>
        <table>
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">type_ref</th>
                    <th scope="col">support</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($typeRefs as $typeRef) {
                ?>
                <tr>
                    <th><?php echo $typeRef["id"] ?></th>
                    <td><?php echo $typeRef["type_ref"] ?></td>
                    <td><?php echo $typeRef["support"] ?></td>
                    <td><a class="btn btn-primary" target="_blank" href="VoirTypeRef.php?id=<?php echo $typeRef["id"] ?>" role="button">voir TypeRef</a></td>
                    <td><a class="btn btn-primary" target="_blank" href="ModifTypeRef.php?id=<?php echo $typeRef["id"] ?>" role="button">Modifier TypeRef</a></td>
                    <td><a class="btn btn-danger" target="_blank" href="SuppressionTypeRef.php?id=<?php echo $typeRef["id"] ?>" role="button">Supprimer TypeRef</a></td>              
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
<?php
    }
    public static function infoTypeRef($id)
    {
        $user = ModelTypeRef::infoTypeRef($id);
        echo $user["id"] . " ";
        echo $user["type_ref"] . " ";
        echo $user["support"] . " ";
    }
    public static function modifTypeRef($id)
    {
        $user = ModelTypeRef::infoTypeRef($id);
    ?>
        <form name="modif_user" id="modif_user" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form">
                <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $user['id'] ?>">
                <div class="col-3">
                    <input type="text" name="type_ref" id="type_ref" class="form-control" aria-describedby="type_ref" value="<?php echo $user["type_ref"] ?>" required>
                </div>
                <div class="col-3">
                    <input type="text" name="support" id="support" class="form-control" aria-describedby="support" value="<?php echo $user["support"] ?>" required>
                </div>
                <button type="submit" class="btn btn-primary" value="Confirmer la modification" id="modif" name="modif">Modif</button>
            </div>
        </form>
    <?php
    }
}
