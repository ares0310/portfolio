

    <?php
    session_start();

    require_once "../model/modelUser.php";
    require_once "../view/viewUser.php";
    require_once "../view/viewTemplate.php";
    require_once "../utils/utils.php";
    ViewTemplate::docType();
    ViewTemplate::navBar();
    ViewTemplate::marginTop();

    if (isset($_POST["valider"])) {
        if ($_POST["password1"] == $_POST["password2"]) {
            // Model - requete change mdp etc
            $donnees = [$_POST["password1"]];
            $types = ["password"];
            $data = Utils::valider($donnees, $types);
            if ($data) {
                $mail = $_GET["mail"];
                ModelUser::resetMdp($mail, password_hash($data[0], PASSWORD_DEFAULT));
                ViewTemplate::alert("Mot de passe changé", "success", "accueil.php");
            } else {
                ViewTemplate::alert("Mot de passe faible", "danger", "accueil.php");
            }
        } else {
            ViewTemplate::alert("Les mots de passe sont incorrects", "danger", "accueil.php");
        }
    } else {
        ViewUser::resetMdp();
    }
    ViewTemplate::footer();
    ViewTemplate::scriptJs();





    ?>








    <script src="../../js/jquery-3.5.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/all.min.js"></script>
    <script src="../../js/ctrl.js"></script>
</body>

</html>