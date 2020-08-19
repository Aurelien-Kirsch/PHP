<?php

function my_print_users($bdd, ...$id){

    $i =0;
    $id = is_int($i);

    if($id >0){
        while($i < $id){
            try{
                $requete = "SELECT name FROM users WHERE id = ?";
                $prep_req = $bdd->prepare($requete);
                $prep_req->blindParam(1, $i);
                $prep_req->execute();
                if($id != is_int($i)){
                    throw new Exception("Invalid id given");
                }
            }
            catch(Exception $e){
                echo $e->getmessage();
            }
            $i++;
        }
        return true;
    }
    else{
        return false;
    }
   
}
  