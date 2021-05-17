<?php
require_once "../model/ModelEtab.php";
require_once "../model/connexion.php";
class ViewEtab
{
    public static function ajoutEtab()
    {  ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <!-- -->
            <div class="form mt-3">
                <div class="col-3">
                    <input type="text" name="nom" id="nom" class="form-control text-center" placeholder="Nom" required>
                </div>
                <div class="col-3">
                    <input type="text" name="ville" id="ville" class="form-control text-center" placeholder="Ville" required>
                </div>
                <div class="col-3">
                    <input type="text" name="secteur" id="secteur" class="form-control text-center" placeholder="Secteur" required>
                </div>
                <div class="col-3">
                    <button type="submit" name="ajout" class="btn btn-outline-success btn-lg btn-block mb-3">Submit</button>
                </div>
            </div>
        </form>
    <?php
    }
    public static function listEtab()
    {
        $Etabs = ModelEtab::listEtab();
        // var_dump($Etabs); 
    ?>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Ville</th>
                    <th scope="col">Secteur</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($Etabs as $Etab) {                    ?>
                    <tr>
                        <th scope="row"><?php echo $Etab['id'] ?></th>
                        <td><?php echo $Etab['nom'] ?></td>
                        <td><?php echo $Etab['ville'] ?></td>
                        <td><?php echo $Etab['secteur'] ?></td>
                        <td><button class="btn btn-outline-success" name=""><a class="text-success" href="VoirEtab.php?id=<?php echo $Etab['id'] ?>">Afficher</a></button></td>
                        <td><button class="btn btn-outline-info" name=""><a class="text-info" href="ModifEtab.php?id=<?php echo $Etab['id'] ?>">Modifier</a></button></td>
                        <td><button class="btn btn-outline-dark" name=""><a class="text-dark" href="SuppressionEtab.php?id=<?php echo $Etab['id'] ?>">Suppression</a></button></td>
                    </tr>
                <?php                }                ?>
            </tbody>
        </table>
    <?php
    }
    public static function getEtabId($id)
    {
        $Etab = ModelEtab::getEtabId($id)
    ?>
        <table class="table">
            <thead>
                <tr>
                    <th>#ID</th>
                    <th>Nom</th>
                    <th>Ville</th>
                    <th>Secteur</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row"> <?php echo $Etab["id"] ?> </td>
                    <td><?php echo $Etab["nom"] ?></td>
                    <td><?php echo $Etab["ville"] ?></td>
                    <td><?php echo $Etab["secteur"] ?></td>
                </tr>
            </tbody>
        </table>
    <?php }


    public static function modifEtab($id)
    {
        $Etab = ModelEtab::getEtabId($id); ?>
        <div class="container mt-2">
            <form name="modif_Etab" id="modif_Etab" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) //protction attaque code serveur xss 
                                                            ?>" method="post">
                <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $Etab['id'] ?>">
                <div class="form-group">
                    <input type="text" name="nom" id="nom" class="form-control" placeholder="Nom" value="<?php echo $Etab['nom'] ?>" required>
                </div>
                <div class="form-group">
                    <input type="text" name="ville" id="ville" class="form-control" placeholder="Ville" value="<?php echo $Etab['ville'] ?>" required>
                </div>
                <div class="form-group">
                    <input type="text" name="secteur" id="secteur" class="form-control" placeholder="Secteur" value="<?php echo $Etab['secteur'] ?>" required>
                </div>
                <button type="submit" name="modif" class="btn btn-outline-warning mb-2">Confirmer la modification</button>
                <button type="reset" class="btn btn-outline-danger mb-2"><a class="text-danger" href="ListeTypeRef.php">Annuler</a></button>
            </form>
        </div>
<?php
    }
}
?>