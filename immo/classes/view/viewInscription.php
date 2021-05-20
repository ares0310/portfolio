<?php
require_once "../model/modelInscription.php";
class ViewInscription
{
    public static function inscriptionForm()
    {
?>
        <div class="container p-5">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group">
                    <input type="text" name="nom" class="form-control" id="name" placeholder="Nom">
                </div>
                <div class="form-group">
                    <input type="text" name="prenom" class="form-control" id="name" placeholder="Prenom">
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
                <button type="submit" name="valider" class="btn btn-primary">Submit</button>
            </form>
        </div>
<?php
    }
}


?>