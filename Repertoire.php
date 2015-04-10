<?php
require('Personne.php');

/**
 * 
 */
class Repertoire {
    private $pdo;

    /**
     * Constructeur
     */
    function __construct(){
        $login = 'root';
        $password = 'root';
        $this->pdo = new PDO('mysql:host=localhost;dbname=pages_jaunes',
                $login, $password);
}

/**
 * 
 * @param type $id
 * @return \personne
 */
public function recupererPersonne($id){
    $res=$this->pdo->query("SELECT * FROM Personne WHERE id=$id");

    foreach($res as $ligne){
        $p=new personne($ligne['nom'],$ligne['prenom'],$ligne['num_tel'],$ligne['email']);
        return $p;
    }
}

/**
 * 
 */
public function afficherPersonne(){
    $sth=$this->pdo->query("SELECT * FROM Personne;");
    
    foreach($sth as $ligne){
        $p=new personne($ligne['nom'],$ligne['prenom'],$ligne['num_tel'],$ligne['email']);
        $p->AfficherPersonne();}
}

/**
 * 
 * @param type $id
 */
public function supprimerPersonne($id){
    $sup=  $this->pdo->query("DELETE FROM Personne WHERE id=$id");
}

/**
 * 
 * @param type $aj
 */
public function ajouterPersonne($aj){
    if($aj->getid()==0){        
    $aj=$this->pdo->query("INSERT INTO Personne VALUES (DEFAULT,'".$aj->getnom()."',"
            . "'".$aj->getprenom()."',"
            . "'".$aj->getnum_tel()."',"
            . "'".$aj->getemail()."');");
    }
    else{
        echo "Bien ajouté";
    
    }
}

/**
 * 
 */
public function modifierPersonne(){
    $modif=$this->pdo->query("UPDATE  Personne SET num_tel=$num_tel WHERE id=$id");
}
}