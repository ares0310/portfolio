<?php
require_once "../model/ModelSocial.php";
require_once "../view/ViewTypeSoc.php";
require_once "../model/ModelTypeSoc.php";
require_once "../model/ModelTypeRef.php";
require_once "../model/ModelRef.php";
class ViewRef
{
    public static function ajoutRef()
    {
        var_dump("test");
        $listTypeRefs = ModelTypeRef::listeTypeRef();
?>
        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form">
                <div class="col-3">

                    <select name="type_ref_id" id="type_ref_id" class="form-control">
                        <option value="" selected>Sélectionnez un type de ref</option>
                        <?php
                        foreach ($listTypeRefs as $listTypeRef) {
                        ?>
                            <option value="<?php echo $listTypeRef["id"] ?>"><?php echo $listTypeRef["type_ref"] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>

                <div class="col-3">
                    <input type="text" name="nom" id="nom" class="form-control" aria-describedby="nom" placeholder="nom" required>
                </div>
                <div class="col-3">
                    <input type="text" name="lien" id="lien" class="form-control" aria-describedby="lien" placeholder="lien">
                </div>

                <div class="col-3">
                    <input type="text" name="techno" id="techno" class="form-control" aria-describedby="techno" placeholder="techno" required>
                </div>
                <div class="col-3">
                    <textarea type="textarea" name="contributeurs" id="contributeurs" class="form-control" aria-describedby="contributeurs" placeholder="contributeurs"></textarea>
                </div>

                <button type="submit" name="ajout" class="btn btn-primary">Submit</button>
            </div>
        </form>
    <?php
    }
    public static function listeRef()
    {
        $listesRef = ModelRef::listeRef();
        var_dump($listesRef);
    ?>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">User ID</th>
                    <th scope="col">nom</th>
                    <th scope="col">prénom</th>
                    <th scope="col">type référence</th>
                    <th scope="col">support</th>
                    <th scope="col">Nom référence</th>
                    <th scope="col">techno</th>
                    <th scope="col">lien</th>
                    <th scope="col">contributeurs</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>


                <?php
                foreach ($listesRef as $listeRef) {
                ?>

                    <tr>
                        <th scope="col"><?php echo $listeRef["user_id"] ?> </th>
                        <th scope="col"><?php echo $listeRef["nom"] ?></th>
                        <th scope="col"><?php echo $listeRef["prenom"] ?></th>
                        <th scope="col"><?php echo $listeRef["type_ref"] ?></th>
                        <th scope="col"><?php echo $listeRef["support"] ?></th>
                        <th scope="col"><?php echo $listeRef["nom_ref"] ?></th>
                        <th scope="col"><?php echo $listeRef["techno"] ?></th>
                        <th scope="col"><?php echo $listeRef["lien"]==="" ? "NA" : $listeRef["lien"] ?></th>
                        <th scope="col"><?php echo $listeRef["contributeurs"]==="" ? "NA" : $listeRef["contributeurs"] ?></th>
                        <th scope="col"><a class="btn btn-primary" target="_blank" href="ModifRef.php?id=<?php echo $listeRef["ref_id"] ?>" role="button">Modifier référence</th>
                    </tr>

                <?php
                }
                ?>
            </tbody>
        </table>
<?php

    }

    public static function modifReference($id)
    {
        $typesRef = ModelTypeRef::listeTypeRef();
        $selectedRef = ModelRef::getReferenceById($id);
    ?>
        <div class="container">
            <form name="modif_ref" id="modif_ref" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                <input type="hidden" name="id" name="id" value="<?php echo $id; ?>" />
                <select name="type_ref_id" class="form-control" required>
                    <?php
                    foreach ($typesRef as $typeRef) {
                    ?>
                        <option value="<?php echo $typeRef['id'] ?>" <?php echo $typeRef['id'] == $selectedRef['type_ref_id'] ? "selected" : "" ?>>
                            <?php echo $typeRef['type_ref'] . " - " . $typeRef['support'] ?>
                        </option>
                    <?php
                    }
                    ?>
                </select>
                <div class=" form-group">
                    <input type="text" name="nom" id="nom" value="<?php echo $selectedRef['nom'] ?>" class="form-control" aria-describedby="nom" placeholder="nom" required>
                </div>
                <div class=" form-group">
                    <input type="text" name="techno" id="techno" value="<?php echo $selectedRef['techno'] ?>" class="form-control" aria-describedby="tehcno" placeholder="techno" required>
                </div>
<textarea class="form-control" name="contributeurs" id="contributeurs" rows="3"><?php echo $selectedRef['contributeurs'] ?></textarea><br>

                <div class=" form-group">
                    <input type="url" name="lien" id="lien" value="<?php echo $selectedRef['lien'] ?>" class="form-control" aria-describedby="lien" placeholder="Lien" required>
                </div>
                <button type="submit" class="btn btn-primary" name="modif">Modifier</button>
                <button type="reset" class="btn btn-danger">Annuler</button>

            </form>
        </div>
<?php
    }
    /*
    public static function modifRef($id){
        ModelRef::getReferenceById($id);
        ModelRef::ModifRef($id);

        ?>
        <div class="container">
            <form name="modif_social" id="modif_social" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                <input type="hidden" name="id" name="id" value="<?php echo $id; ?>" />
                <div class=" form-group">
                    <input type="url" name="lien" id="lien" value="<?php echo 1?>" class="form-control" aria-describedby="lien" placeholder="Lien" required>
                </div>
                <div class=" form-group">
                    <input type="url" name="lien" id="lien" value="<?php echo 2?>" class="form-control" aria-describedby="lien" placeholder="Lien" required>
                </div>
                <div class=" form-group">
                    <input type="url" name="lien" id="lien" value="<?php echo 3?>" class="form-control" aria-describedby="lien" placeholder="Lien" required>
                </div>
                <div class=" form-group">
                    <input type="url" name="lien" id="lien" value="<?php echo 4?>" class="form-control" aria-describedby="lien" placeholder="Lien" required>
                </div>
                <div class=" form-group">
                    <input type="url" name="lien" id="lien" value="<?php echo 5?>" class="form-control" aria-describedby="lien" placeholder="Lien" required>
                </div>
                <div class=" form-group">
                    <input type="url" name="lien" id="lien" value="<?php echo 6?>" class="form-control" aria-describedby="lien" placeholder="Lien" required>
                </div>
                <div class=" form-group">
                    <input type="url" name="lien" id="lien" value="<?php echo 7?>" class="form-control" aria-describedby="lien" placeholder="Lien" required>
                </div>
                <button type="submit" class="btn btn-primary" name="modif">Modifier</button>
                <button type="reset" class="btn btn-danger">Annuler</button>
            </form>
        </div>
    <?php
    }
    */
}
