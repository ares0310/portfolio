<?php
require_once "../model/ModelUser.php";
require_once "../Utilsa/Utilsa.php";
class ViewUser
{
    public static function ajoutUser()
    {
        isset($_POST["valider"]) ? $formSubmit = true : $formSubmit = false;
?>
        <div id="erreurs"></div>
        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="ajout_user" enctype="multipart/form-data">
            <!-- enctype ajouté ET input type="file" ajouté à la section photo (ce form contient des pieces jointes) -->
            <div class="form">
                <div class="col-3">
                    <input type="text" name="nom" id="nom" value="<?php echo $formSubmit ?  $_POST['nom'] : '' ?>" class="form-control" aria-describedby="nom" placeholder="Nom" required>
                </div>
                <div class="col-3">
                    <input type="text" name="prenom" id="prenom" value="<?php echo $formSubmit ?  $_POST['prenom'] : '' ?>" class="form-control" aria-describedby="prenom" placeholder="prenom" required>
                </div>
                <div class="col-3">
                    <input type="text" name="mail" id="mail" value="<?php echo $formSubmit ?  $_POST['mail'] : '' ?>" class="form-control" aria-describedby="mail" placeholder="mail" required>
                </div>
                <div class="col-3">
                    <input type="text" name="tel" id="tel" value="<?php echo $formSubmit ?  $_POST['tel'] : '' ?>" class="form-control" aria-describedby="tel" placeholder="tel" required>
                </div>
                <div class="col-3">
                    <input type="text" name="adresse" id="adresse" value="<?php echo $formSubmit ?  $_POST['adresse'] : '' ?>" class="form-control" aria-describedby="adresse" placeholder="adresse" required>
                </div>
                <div class="col-3">
                    <input type="file" name="fichier" id="fichier" accept=".png, .jpg, .jpeg, .gif" class="form-control" aria-describedby="photo" placeholder="photo" required>
                </div>
                <div class="col-3">
                    <textarea name="description" id="description" value="<?php echo $formSubmit ?  $_POST['description'] : '' ?>" class="form-control" aria-describedby="description" placeholder="description" required></textarea>
                </div>
                <button type="submit" id="submit" name="valider" class="btn btn-primary">Submit</button>
            </div>
        </form>
    <?php
    }
    public static function ModifUser($id)
    {
        $user = ModelUser::infoUsers($id);
        isset($_POST["valider"]) ? $formSubmit = true : $formSubmit = false;

    ?>
        <div id="erreurs"></div>
        <div class="container">

            <form name="modif_user" id="modif_user" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" enctype="multipart/form-data">
                <img src="<?php echo  "../../photos/" . $user['photo'] ?>" width="70" />
                <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $formSubmit ? $_POST['id'] : $user['id'] ?>">
                <div class="form-group">
                    <input type="text" class="form-control" id="nom" name="nom" value="<?php echo $formSubmit ? $_POST['nom'] : $user['nom'] ?>" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="prenom" name="prenom" value="<?php echo $formSubmit ? $_POST['prenom'] : $user['prenom'] ?>" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="mail" name="mail" value="<?php echo $formSubmit ? $_POST['mail'] : $user['mail'] ?>" required>
                </div>
                <div class="form-group">
                    <input type="tel" class="form-control" id="tel" name="tel" value="<?php echo $formSubmit ? $_POST['tel'] : $user['tel'] ?>" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="adresse" name="adresse" value="<?php echo $formSubmit ? $_POST['adresse'] : $user['adresse'] ?>" required>
                </div>
                <div class="form-group">
                    <input type="file" name="fichier" id="fichier" accept="image/*" class="form-control" aria-describedby="fichier" placeholder="fichier">
                </div>
                <input type="hidden" class="form-control" id="photo" name="photo" value="<?php echo $formSubmit ? $_POST['photo'] : $user['photo'] ?>" required>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" required><?php echo $formSubmit ? $_POST['description'] : $user['description'] ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary" id="modif" name="modif">Confirmer la modification</button>
                <button type="reset" class="btn btn-danger">Annuler</button>
            </form>
        </div>
        </div>
        </div>

        <!-- mon code d'origine qui marche (ajouter ? dans les balises php dans value)
        <form name="modif_user" id="modif_user" action="<php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
            <div class="form">
                <input type="hidden" class="form-control" id="id" name="id" value="<php echo $user['id'] ?>">
                <div class="col-3">
                    <input type="text" name="nom" id="nom" class="form-control" aria-describedby="nom" value="<php echo $user["nom"] ?>" required>
                </div>
                <div class="col-3">
                    <input type="text" name="prenom" id="prenom" class="form-control" aria-describedby="prenom" value="<php echo $user["prenom"] ?>" required>
                </div>
                <div class="col-3">
                    <input type="text" name="mail" id="mail" class="form-control" aria-describedby="mail" value="<php echo $user["mail"] ?>" required>
                </div>
                <div class="col-3">
                    <input type="text" name="tel" id="tel" class="form-control" aria-describedby="tel" value="<php echo $user["tel"] ?>" required>
                </div>
                <div class="col-3">
                    <input type="text" name="adresse" id="adresse" class="form-control" aria-describedby="adresse" value="<php echo $user["adresse"] ?>" required>
                </div>
                <div class="col-3">
                    <input type="hidden" name="fichier" id="fichier" class="form-control" aria-describedby="photo" value="<php echo $user["photo"] ?>" required>
                </div>
                <div class="col-3">
                    <textarea name="description" id="description" class="form-control" aria-describedby="description" required>
                    <php echo nl2br($user["description"]) /* nl ==> br = retour à la ligne */  ?></textarea>
                </div>
                <input type="submit" class="btn btn-primary" value="Confirmer la modification" id="modif" name="modif" />
            </div>
        </form>
    -->
    <?php
    }
    public static function listeUsers()
    {
        $users = ModelUser::listeUsers();
    ?>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Mail</th>
                    <th scope="col">Tel</th>
                    <th scope="col">Adresse</th>
                    <th scope="col">Description</th>
                    <th scope="col">Actions</th>
                    <th scope="col">Modification</th>
                    <th scope="col">Suppression</th>


                </tr>
            </thead>
            <tbody>

                <?php
                foreach ($users as $user) {
                ?>
                    <tr>
                        <th scope="row"> <?php echo $user['id'] ?></th>
                        <td><img src="../../photos/<?php echo $user['photo'] ?>" width="100" /></td>
                        <td><?php echo $user['nom'] ?></td>
                        <td><?php echo $user['prenom'] ?></td>
                        <td><?php echo $user['mail'] ?></td>
                        <td><?php echo $user['tel'] ?></td>
                        <td><?php echo $user['adresse'] ?></td>
                        <td><?php echo $user['description'] ?></td>
                        <td><a class="btn btn-primary" target="_blank" href="VoirProfil.php?id=<?php echo $user["id"] ?>" role="button">voir profil</a></td>
                        <td><a type="button" class="btn btn-danger lien-modif" href="ModifProfilTest.php?id=<?php echo $user["id"] ?>" role="button" data-toggle="modal" data-target="#modal-modif">
                            Modifier profil
                        </a></td>

                        <td><button type="button" class="btn btn-danger supp-user" id="<?php echo $user["id"] ?>" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                Supprimer
                            </button></td>

                    </tr>

                <?php
                }

                ?>


            </tbody>
        </table>
        <!-- Modal supprimer-->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Confirmer la suppression du User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Voulez vous vraiment supprimer cet utilisateur ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary annuler" data-dismiss="modal">Retour</button>
                        <a type="button" class="btn btn-danger lien-supp" href="" role="button">
                            Suppression
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal modifier profil-->
        
        <div class="modal fade modal-modif" id="modal-modif" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="modal-modifLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-modifLabel">Modif user</h5>
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
    public static function infoUsers($id)
    {
        $user = ModelUser::infoUsers($id);
        echo $user["id"] . " ";
        echo $user["nom"] . " ";
        echo $user["prenom"] . " ";
        echo $user["tel"] . " ";
        echo $user["adresse"] . " ";
        echo $user["description"] . " ";
    }
}
