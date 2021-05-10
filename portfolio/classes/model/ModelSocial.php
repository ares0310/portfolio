<?php
require_once "connexion.php";
class ModelSocial
{
    public static function ajoutSocial($userId, $typeSocialId, $lien)
    {
        $idcon = connexion();
        $requete = $idcon->prepare("
                    INSERT INTO social VALUES (null,:typeSocialId)
                ");
        $requete->execute([
            ':typeSocialId' => $typeSocialId
        ]);
        $idSocial = $idcon->lastInsertId();
        $requete2 = $idcon->prepare("
                    INSERT INTO user_soc VALUES (:userId,:idSocial, :lien)
                ");
        $requete2->execute([
            ':userId' => $userId,
            ':idSocial' => $idSocial,
            ':lien' => $lien,
        ]);
    }

    public static function afficheListeRs(){
        $idcon = connexion();
        $requete = $idcon->prepare("
        SELECT user_id, type_soc_id, type_soc, lien, nom, prenom 
        FROM user_soc 
        INNER JOIN user 
        ON user_soc.user_id = user.id 
        INNER JOIN social 
        ON social_id = social.id 
        INNER JOIN type_soc 
        ON type_soc_id = type_soc.id 
        ORDER BY nom");
        $requete->execute();
        return $requete->fetchAll();
    }
    public static function listeRS()
    {
        $idcon = connexion();
        $requete = $idcon->prepare("
                    SELECT user.id as user_id, lien, nom, prenom, type_soc, social.id as social_id
                    from user_soc
                    INNER JOIN user
                    ON user_id=user.id

                    INNER JOIN social
                    ON user_soc.social_id=social.id

                    INNER JOIN type_soc
                    ON type_soc_id=type_soc.id

                    ORDER BY user_id
                ");
        $requete->execute();
        return $requete->fetchAll();
    }
   
    public static function getSocById($id)
    {
        $idcon = connexion();
        $requete = $idcon->prepare(" 
            SELECT * FROM social
            INNER JOIN user_soc
            ON social_id=social.id
            WHERE social.id=:id
        ");
        $requete->execute([
            ':id' => $id
        ]);
        return $requete->fetch(PDO::FETCH_ASSOC);
    }
    public static function modifRS($type_soc_id, $lien, $id){
        $idcon = connexion();
        $requetmodif= $idcon->prepare(
            "UPDATE user_soc 
            INNER JOIN social 
            ON user_soc.social_id= social.id 
        SET social.type_soc_id = :type_soc_id, user_soc.lien = :lien 
        WHERE social.id = :id ");
        $requetmodif->execute([
            ":type_soc_id"=>$type_soc_id,
            ":lien"=>$lien,
            ":id"=>$id
        ]);
    }
    public static function suppressionRS($id){
        $idcon = connexion();
        $requete = $idcon -> prepare("DELETE social, user_soc
        FROM social 
        INNER JOIN user_soc
        ON social.id = user_soc.social_id 
        WHERE social.id = :id ");
        $requete->execute([":id" => $id]);
    }

}