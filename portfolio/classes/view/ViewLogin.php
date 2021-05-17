<?php
require_once("../model/ModelInscription.php");
class ViewLogin
{
    public static function connexionForm()
    {
?>
    <div id="session"></div>
    <div id="erreurs"></div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="formConnexion" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" id="mail" name="mail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" id="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" id="connexion" name="connexion" class="btn btn-primary">Connexion</button>
        </form>
<?php
    }
}

?>