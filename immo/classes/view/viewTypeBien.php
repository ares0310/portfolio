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
                    
                    <td><a class="btn btn-primary" target="_blank" href="ModifTypeBien.php?id=<?php echo $typeRef["id"] ?>&libelle=<?php echo $typeRef["libelle"] ?>" role="button">Modifier TypeRef</a></td>
                    <td><a class="btn btn-danger" target="_blank" href="SuppressionTypeBien.php?id=<?php echo $typeRef["id"] ?>" role="button">Supprimer TypeRef</a></td>              
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
<?php
    }

    public static function modifTypeBien(){
        ?>
        <div class="container p-5">
            <div id="erreurs"></div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="reset" method="post">
                <div class="form-group">
                    <input type="text" id="libelle" name="libelle" class="form-control" value="<?php echo $_GET["libelle"] ?>" placeholder="Libelle">
                </div>
                <div>
                    <button type="submit" id="valider" name="valider" value="<?php echo $_GET["id"] ?>" class="btn btn-primary">Valider</button>
                </div>
            </form>

        </div>
    <?php
    }
}


?>