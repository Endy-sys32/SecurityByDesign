<?php

class GestionBDD
{

    private static $serveur = 'localhost';
    private static $base = 'secbydes';
    private static $user = 'root';
    private static $passe = "";

    private static $pdoCnxBase = null;
    private static  $pdoStResults = null;
    private static $requete = null;
    private static $resultat = null;

    public static function seConnecter() {

        if (!isset(self::$pdoCnxBase))
        { //S'il n'y a pas encore eu de connexion
            try {
                self::$pdoCnxBase = new PDO('mysql:host=' .self::$serveur. ';dbname=' . self::$base,self::$user,self::$passe);
                self::$pdoCnxBase->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$pdoCnxBase->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
                self::$pdoCnxBase->query("SET CHARACTER SET utf8");
                echo 'Vous etes connecté';
            }
            catch (Exception $e) {
                // l’objet pdoCnxBase a généré automatiquement un objet de type Exception
                echo 'Erreur : ' . $e->getMessage() . '<br />'; // méthode de la classe Exception
                echo 'Code : ' . $e->getCode(); // méthode de la classe Exception
            }
        }
    }

}