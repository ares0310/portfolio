<?php
require_once "../model/ModelUser.php";

class ViewTemplate
{
    public static function alert($message, $type, $lien)
    {

?>

        <div class="alert alert-<?php echo $type ?>" role="alert">
            <?php echo $message ?>
            <a href="<?php echo $lien  ?>">cliquez ici</a>
        </div>

    <?php
    }


    public static function menu()
    {
    ?>
        <nav class="navbar navbar-expand-lg navbar-light bg-primary mb-5">
            <a class="navbar-brand" href="VoirProfil.php">Portfolio</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="CreationUser.php">Creation user<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="listeUsers.php">Liste user</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="listeTypeSoc.php">Liste RS</a>
                    </li>
                </ul>
            </div>
        </nav>
    <?php
    }


    public static function footer()
    {
    ?>

        <div class="fixed-bottom bg-dark text-white text-center">
            Portfolio Team © <?php echo date("Y") ?>
        </div>

<?php
    }
}
