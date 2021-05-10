<?php
require_once "connexion.php";

class ModelRef
{
    public static function ajoutRef($user_id, $lien, $type_ref_id, $nom, $techno, $contributeurs)
    {

        $idcon = connexion();
        $requete = $idcon->prepare("INSERT INTO reference VALUES (null, :type_ref_id, :nom, :techno, :contributeurs)");
        $requete->execute([":type_ref_id" => $type_ref_id, ":nom" => $nom, ":techno" => $techno, ":contributeurs" => $contributeurs]);

        $ref_id = $idcon->lastInsertId();
        $requete2 = $idcon->prepare("INSERT INTO user_ref VALUES (:user_id, :ref_id, :lien)"); // - insertion dans user ref - créer formulaire d'abord (lien pas de require car facultatif)
        $requete2->execute([":lien" => $lien, ":ref_id" => $ref_id, ":user_id" => $user_id]);
    }
    public static function listeRef()
    {
        $idcon = connexion();
        $requete = $idcon->prepare("
        SELECT reference.id as ref_id, user.id as user_id, user.nom, prenom, type_ref, support,reference.nom as nom_ref, techno, lien, contributeurs
            FROM reference
            INNER JOIN user_ref
            ON reference.id=ref_id

            INNER JOIN user
            ON user.id=user_id

            INNER JOIN type_ref
            ON type_ref.id=type_ref_id

            ORDER BY user_id
        ");         // mettre toutes les colonnes qu'on veut et inner join
        $requete->execute();
        return $requete->fetchAll();
    }
    public static function ModifRef($idRef, $idType,$nom, $techno, $contributeurs, $lien)
    {
        $idcon = connexion();
        $requete = $idcon->prepare(" 
            UPDATE reference
            INNER JOIN user_ref
            ON ref_id=reference.id
            SET type_ref_id=:idType, nom=:nom, techno=:techno, contributeurs=:contributeurs,   lien=:lien
            WHERE reference.id=:idRef
        ");
        $requete->execute([
            ':idType' => $idType,
            ':nom' => $nom,
            ':techno' => $techno,
            ':contributeurs' => $contributeurs,
            ':lien' => $lien,
            ':idRef' => $idRef,
        ]);
    }
    // {
    //     $idcon = connexion();
    //     $requete = $idcon->prepare(
    //     "UPDATE reference
    //     INNER JOIN type_ref
    //     ON reference.type_ref_id = type_ref.id

    //     INNER JOIN user_ref -- inclure encore quelques tables
    //     ON reference.id = user_ref.ref_id

    //     INNER JOIN user
    //     ON user_ref.user_id = user.id
        
    //     INNER JOIN 
    //     SET 
    //     -- inclure quel colonne exactement faut il changer
    //     ");
    //     $requete->execute();
    // }
    public static function getReferenceById($id){
        $idcon = connexion();
        $requete = $idcon->prepare(" 
            SELECT * FROM reference
            INNER JOIN user_ref
            ON ref_id=reference.id
            WHERE reference.id=:id
        ");
        $requete->execute([
            ':id' => $id
        ]);
        return $requete->fetch();
    }
}
