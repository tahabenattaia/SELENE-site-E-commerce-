<?php
$idv=$_GET['idc'];
include "connexion.php";
$req=$db->prepare("update client set etat =1 ,date_modification=? where id=?");
$res=$req->execute(array(date('Y-m-d'),$idv));
if ($res)
{
    header('location:liste_clients.php');
}
else{
    echo("erreur de validation");
}
?>