<?php
require_once "../model/modelUser.php";
class ViewUser
{
    public static function inscriptionForm()
    {
?>
        <div class="container p-5">
            <div id="erreurs"></div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="ajout_user" method="post">
                <div class="form-group">
                    <input type="text" name="nom" class="form-control" id="nom" placeholder="Nom">
                </div>
                <div class="form-group">
                    <input type="text" name="prenom" class="form-control" id="prenom" placeholder="Prenom">
                </div>
                <div class="form-group">
                    <input type="email" name="mail" class="form-control" id="mail" aria-describedby="emailHelp" placeholder="Mail">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="password">
                </div>
                <div class="form-group">
                    <input type="text" name="tel" class="form-control" id="tel" placeholder="Téléphone">
                </div>
                <button type="submit" id="valider" name="valider" class="btn btn-primary">Submit</button>
            </form>

        </div>
    <?php
    }
    public static function connexionForm()
    {

    ?>
        <div class="container p-5">
            <div id="erreurs"></div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="connexion_user" method="post">
                <div class="form-group">
                    <input type="email" name="mail" class="form-control" id="mail" aria-describedby="emailHelp" placeholder="Mail">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="password">
                </div>
                <div>
                    <button type="submit" id="connexion" name="connexion" class="btn btn-primary">Connexion</button>
                    <a class="btn btn-primary ml-5" target="_blank" href="resetMdp.php" role="button">Mot de passe oublié</a>
                </div>

            </form>

        </div>
    <?php

    }
    public static function reset()
    {
    ?>
        <div class="container p-5">
            <div id="erreurs"></div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="reset" method="post">
                <div class="form-group">
                    <input type="email" name="mail" class="form-control" id="mail" aria-describedby="emailHelp" placeholder="Mail">
                </div>
                <div>
                    <button type="submit" id="change" name="change" class="btn btn-primary">Valider le mail</button>
                </div>

            </form>

        </div>
    <?php
    }
    public static function resetMdp()
    {
    ?>
        <div class="container p-5">
            <div id="erreurs"></div>
            <!-- REQUEST_URI pour récup parametres get, sinon changer en "PHP_SELF" -->
            <form action="<?php echo htmlspecialchars($_SERVER["REQUEST_URI"]); ?>" id="resetMdp" method="post">
                <div class="form-group">
                    <input type="password" name="password1" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-group">
                    <input type="password" name="password2" class="form-control" id="exampleInputPassword2" placeholder="Confirmez votre nouveau mot de passe">
                </div>
                <div>
                    <button type="submit" id="valider" name="valider" class="btn btn-primary">Valider le mail</button>
                </div>
                

            </form>

        </div>
<?php
    }
}


?>