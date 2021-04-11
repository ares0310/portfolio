<?php
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
}
