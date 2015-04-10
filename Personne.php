<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Personne
 *
 * @author jumpertz
 */
class Personne {
    private $id;
    private $nom;
    private $prenom;
    private $num_tel;
    private $email;
    
    /**
     * 
     * @param type $nom
     * @param type $prenom
     * @param type $num_tel
     * @param type $email
     * @param type $id
     */
    public function __construct($nom, $prenom, $num_tel, $email, $id=0) {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->num_tel = $num_tel;
        $this->email = $email;
    }
    
    /**
     * Methode AfficherPersonne
     */
    public function AfficherPersonne(){
        echo "<table border=1><tr><td>Nom : </td>"."<td>".$this->nom."</td></tr>"
                . "<tr><td>Prenom : </td>"."<td>".$this->prenom."</td></tr>"
                . "<tr><td>Numéros de téléphone : </td>"."<td>".$this->num_tel."</td></tr>"
                . "<tr><td>email : </td>"."<td>".$this->email."</td></tr></table>";
    }
    
    
    /**
     * 
     * @return type
     */
    function getid(){
        return $this->id;
    }
    
    function getnom(){
        return $this->nom;
    }
    
    function getprenom(){
        return $this->prenom;
    }

    function getnum_tel(){
        return $this->num_tel;
    }
    
    function getemail(){
        return $this->email;
    }
}
