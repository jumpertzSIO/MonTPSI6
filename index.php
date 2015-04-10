<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require('Repertoire.php');
        $r = new repertoire();
        echo "<br/><br/>Exercice 2 : <br/><br/>";
        $r->recupererPersonne(2)->AfficherPersonne();
        echo "<br/>Exercice 3 : <br/><br/>";
        
        $p=new Personne('Bonnin','Florian',
                '0789453511','florian.bonnin@gmail.com');
        $r->ajouterPersonne($p);
        $r->afficherPersonne();
        ?>
    </body>
</html>
