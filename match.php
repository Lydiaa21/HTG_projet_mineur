<?php

$trait1=isset($_POST["trait-1"])? $_POST["trait-1"]:"";
echo($trait1);
echo("test");

$nb="";
$result="";

        //BDD------------------------------\\
        $contenu="";
                
              $result="";
              $database = "hellotechgirls";
              $db_handle = mysqli_connect('localhost', 'root', '' );
              $db_found = mysqli_select_db($db_handle, $database);
         
        if ($db_found){
                $sql = "SELECT * FROM marraine WHERE personnalite1='"."$trait1"."' OR personnalite2='"."$trait1"."'";
                $resultat =mysqli_query($db_handle,$sql);
                
                }


                ?> 