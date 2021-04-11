<!-- CLASS -->
<!-- VARIABLE STATIQUE (pas beaucoup utilisé)-->
<?php
class pi
{
    public static $value = 3.14159;
}

// Get static property
echo pi::$value;

?>


<!-- on definit une propriété ou méthode statique, il faut le précéder par le mot static
Comme les méthodes statiques sont utilisables sans la création d’objet, vous ne devez pas utiliser la pseudo-
variable $this pour faire référence à une propriété de la classe dans le corps de la méthode.
parce que static, ca signifie une var ou une methode de classe, elle n'est pas propre à un objet à lui seul -->
<!-- l'acces à une var static se fait comme suit :
self::$propriété si la méthode est celle de la même classe, ou encore :
nomclasse::$propriété si la méthode est celle d’une autre classe. -->

<!-- Si vous créez un objet instance de la classe, la propriété déclarée static n’est pas accessible à l’objet 
en écrivant le code $objet–>propriété. Par contre, les méthodes statiques sont accessibles par l’objet avec 
la syntaxe habituelle $objet–>méthode().
Si vous modifiez la valeur d’une propriété déclarée statique à partir d’un objet, 
cette modification n’est pas prise en compte par les méthodes qui utilisent cette propriété. 
Il y a donc un danger de confusion difficile à localiser puisque aucune erreur n’est signalée. -->





<!-- Les méthodes statiques peuvent être appelées directement - sans créer d'abord une instance de la classe.

Les méthodes statiques sont déclarées avec lestaticmot - clé:
exemple -->
<?php
class ClassName
{
    public static function staticMethod()
    {
        echo "Hello World!";
    }
}
?>
<!-- pour appeler une methode statique  à l'intérieur de la meme classe, on utilise self::nom_methode();
exemple : -->
<?php
class greeting
{
    public static function welcome()
    {
        echo "Hello World!";
    }

    public function __construct()
    {
        self::welcome();
    }
}

new greeting();
?>

<!-- Les méthodes statiques peuvent également être appelées de l'extérieur de la classe ou à partir de méthodes d'autres classes
appel de l'extérieur -->
<?php
// class greeting {
//   public static function welcome() {
//     echo "Hello World!";
//   }
// }

// // Call static method
// greeting::welcome();
?>

<!-- appel à partir d'une autre classe -->
<?php
class greeting1
{
    public static function welcome()
    {
        echo "Hello World!";
    }
}

class SomeOtherClass
{
    public function message()
    {
        greeting::welcome();
    }
}
?>
<!-- Si vous créez un objet instance de la classe, la propriété déclarée static n’est pas accessible à l’objet en écrivant le code $objet–>propriété. 
Par contre, les méthodes statiques sont accessibles par l’objet avec la syntaxe habituelle $objet–>méthode(). -->

<?php
class Fruit
{
    public $name;
    public $color;
    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    protected function intro()
    {
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
}

class Strawberry extends Fruit
{
    public function message()
    {
        echo "Am I a fruit or a berry? ";
        Fruit::intro();
    }
}

// Try to call all three methods from outside class
$strawberry = new Strawberry("Strawberry", "red");  // OK. __construct() is public
$strawberry->message(); // OK. message() is public
// $strawberry->intro(); // // ERROR. intro() is protected -- affiche erreur - pour rectifier il faut l'afficher 
// dans la classe Strawberry (pas à l'extérieur)



// Le final mot-clé peut être utilisé pour empêcher l'héritage de classe ou pour empêcher le remplacement de méthode.
// L'exemple suivant montre comment empêcher l'héritage de classe:
// final class Fruit1
// {
//     // some code
// }
// will result in error
// class Strawberry1 extends Fruit1
// {
//     // some code
//     public function message()
//     {
//         echo "xD";
//     }
// }

// pour faire marcher code juste au dessus faire le code suivant
class Fruit2 {
    final public function intro() {
    echo "lol";
    }
  }
  
  class Strawberry2 extends Fruit2 {
    public function message() {
      echo "Am I a fruit or a berry? ";
      parent::intro();
    }
  }
  $strawberry = new Strawberry2();
  $strawberry->message();
?>



requete preparee http://www.lephpfacile.com/manuel-php/pdostatement.execute.php
/*
les param, on peut les nommer comme on veut, mais pour des raisons de lisibilité, on garde les memes noms
==> on obtient la requete suivante :
$requete = $idcon->prepare('SELECT nom, couleur, calories
    FROM fruit
    WHERE calories < :calories AND couleur = :couleur)
ensuite, on associe à chaque param sa valeur
$requete->bindParam(':calories', $calories, PDO::PARAM_INT);
on associe au param : :calories la valeur de la var $calories
PDO::PARAM_INT : ca signifie que le param :calories sera de type entier
on fait pareil pour la couleur
$requete->bindParam(':couleur', $couleur, PDO::PARAM_STR, 12);
PDO::PARAM_STR : ce param est de type chaine de caract
et de longueur 12
enfin, on exécute la requete via la methode $requete->execute();
------
en gros, on fait comme suit :
1- on prepare la requete
2- on associe des valeurs aux param
3- on execute la requete

exemple 1
<?php
    /* Exécute une requête préparée en liant des variables PHP */
    $calories = 150;
    $couleur = 'rouge';
    $sth = $dbh->prepare('SELECT nom, couleur, calories
    	FROM fruit
    	WHERE calories < :calories AND couleur = :couleur');
    $sth->bindParam(':calories', $calories, PDO::PARAM_INT);
    $sth->bindParam(':couleur', $couleur, PDO::PARAM_STR, 12);
    $sth->execute();
    ?>

exemple 2
<?php
    $calories = 150;
    $couleur = 'rouge';
    $sth = $dbh->prepare('SELECT nom, couleur, calories
        FROM fruit
        WHERE calories < :calories AND couleur = :couleur');
    $sth->execute([':calories' => $calories, ':couleur' => $couleur]);
    ?>
cette syntaxe utilise la methode des tab associatifs
et c'est la methode que je vous recommande





$requete = $idcon->prepare("
    INSERT INTO user VALUES (null,:nom, :prenom, :mail, :tel, :adresse, :photo, :description) --> pas de valeur en dur
");

lors de l'appel de la methode prepare, il faut pas mettre des valeurs
il faut mettre des param

$requete->execute([
            ':nom' => $nom,
            ':prenom' => $prenom,
            ':mail' => $mail,
            ':tel' => $tel,
            ':adresse' => $adresse,
            ':photo' => $photo,
            ':description' => $description
        ]);
*/