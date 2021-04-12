<?php
require_once "../model/ModelUser.php";
class ViewUser
{
    public static function ajoutUser()
    {
?>
        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form">
                <div class="col-3">
                    <input type="text" name="nom" id="nom" class="form-control" aria-describedby="nom" placeholder="Nom" required>
                </div>
                <div class="col-3">
                    <input type="text" name="prenom" id="prenom" class="form-control" aria-describedby="prenom" placeholder="prenom" required>
                </div>
                <div class="col-3">
                    <input type="text" name="mail" id="mail" class="form-control" aria-describedby="mail" placeholder="mail" required>
                </div>
                <div class="col-3">
                    <input type="text" name="tel" id="tel" class="form-control" aria-describedby="tel" placeholder="tel" required>
                </div>
                <div class="col-3">
                    <input type="text" name="adresse" id="adresse" class="form-control" aria-describedby="adresse" placeholder="adresse" required>
                </div>
                <div class="col-3">
                    <input type="text" name="photo" id="photo" class="form-control" aria-describedby="photo" placeholder="photo" required>
                </div>
                <div class="col-3">
                    <textarea name="description" id="description" class="form-control" aria-describedby="description" placeholder="description" required></textarea>
                </div>
                <button type="submit" name="valider" class="btn btn-primary">Submit</button>



            </div>
        </form>
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
                </tr>
            </thead>
            <tbody>

                <?php
                foreach ($users as $user) {
                ?>
                    <tr>
                        <th scope="row"> <?php echo $user['id'] ?></th>
                        <td><img src="../../images/<?php echo $user['photo'] ?>"/></td>
                        <td><?php echo $user['nom'] ?></td>
                        <td><?php echo $user['prenom'] ?></td>
                        <td><?php echo $user['mail'] ?></td>
                        <td><?php echo $user['tel'] ?></td>
                        <td><?php echo $user['adresse'] ?></td>
                        <td><?php echo $user['description'] ?></td>
                        <td><a class="btn btn-primary" href="VoirProfil.php?id=<?php echo $user["id"] ?>" role="button">voir profil</a></td>

                    </tr>

                <?php
                }

                ?>


            </tbody>
        </table>

<?php
    }
}


