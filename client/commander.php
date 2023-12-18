<?php
session_start();
include "connexion.php";
include "functions.php"; 
$client=$_SESSION['id'];
if (!isset($_SESSION['nom']) )
 {
    header ('location:login.php');
    exit();
 }

 $idp = $_POST["id"];
 $li = $_POST["li"];
 $qte = $_POST["qte"];

$req = $db->prepare('SELECT pu from article where id = ?');
$res = $req->execute(array($idp));
 if ($req->rowCount() > 0) {
   $prix = $req->fetch();
   if ($req->rowCount() > 0) {
   $total=$qte*$prix["pu"];}
   $date=date('Y-m-d');
   if (!isset($_SESSION["panier"]))
   {
     $_SESSION["panier"]=array($client,0,$date,array());
   }
   $_SESSION["panier"][1]+=$total;
   $_SESSION["panier"][3][]= array( $qte,$total,$date,$date,$li);
}
 

header('location:panier.php');

?>