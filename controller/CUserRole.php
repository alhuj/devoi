<?php

$base_url = "http://localhost:2145/devoirphp/";

//// ADD
if (isset($_POST['valider'])) {

    require_once '../model/DB.php';
    require_once '../model/UserRoleDB.php';

    extract($_POST);
    $roles = listeRoleUser($idUser);
    $n = mysqli_num_rows($roles);
    if ($n < 3) {
        $ok = 0;
        if($n >= 1){
            while ($r = mysqli_fetch_object($roles)) {
                if ($r->idRole == $idRole) {
                    header("location:$base_url?page=listeusers&ok=$ok");
                    die();
                }
            }
        }
        
        $ok = addUserRole($idUser, $idRole);
    }
    header("location:$base_url?page=listeusers&ok=$ok");
}

//SUPPRESSION
if (isset($_GET['idRole'])) {
    require_once 'model/DB.php';
    require_once 'model/UserRoleDB.php';
    
    revokeRole($_GET['idRole'], $_GET['idUti']);
    header("location:$base_url?page=listeusers");
}
?>