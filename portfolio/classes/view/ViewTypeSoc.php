<?php
require_once ("../model/ModelTypeSoc.php");
class ViewSoc
{
    public static function ajoutSocial()
    {
        ?>
        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form">
                <div class="col-3">
                    <input type="text" name="soc" id="soc" class="form-control" aria-describedby="soc" placeholder="Nom" required>
                </div>
                <button type="submit" name="valider" class="btn btn-primary">Submit</button>



            </div>
        </form>
    <?php
    }

    public static function listeTypeSoc()
    {
        $typeSocs = ModelTypeSoc::listeTypeSoc();
    ?>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Type</th>
                    <th scope="col">Action</th>
                    <th scope="col">modifications</th>
                    <th scope="col">Supprimer</th>
                </tr>
            </thead>
            <tbody>

                <?php
                foreach ($typeSocs as $typeSoc) {
                ?>
                    <tr>
                        <th scope="row"> <?php echo $typeSoc['id'] ?></th>
                        <td><?php echo $typeSoc['type_soc'] ?></td>
                        
                        <td><a class="btn btn-primary" target="_blank" href="VoirTypeSoc.php?id=<?php echo $typeSoc["id"] ?>" role="button">voir RS</a></td>
                        <td><a class="btn btn-success" target="_blank" href="ModifTypeSoc.php?id=<?php echo $typeSoc["id"] ?>" role="button">modifier RS</a></td>
                        <td><a type="button" class="btn btn-danger" href="SuppressionTypeSoc.php?id=<?php echo $typeSoc["id"] ?>" role="button">
                                Suppression
                            </a></td>
                    </tr>

                <?php
                }

                ?>


            </tbody>
        </table>

<?php
    }

    public static function infoTypeSoc($id)
    {
        $user = ModelTypeSoc::infoTypeSoc($id);
        echo $user["id"] . " ";
        echo $user["type_soc"] . " ";
    }

    public static function modifTypeSoc($id)
    {
        $user = ModelTypeSoc::infoTypeSoc($id);
    ?>
        <form name="modif_user" id="modif_user" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form">
                <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $user['id'] ?>">
                <div class="col-3">
                    <input type="text" name="type_soc" id="type_soc" class="form-control" aria-describedby="type_soc" value="<?php echo $user["type_soc"] ?>" required>
                </div>
                <input type="submit" class="btn btn-primary" value="Confirmer la modification" id="modif" name="modif"/>
            </div>
        </form>
    <?php
    }
}
