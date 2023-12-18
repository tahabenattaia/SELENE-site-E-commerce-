<?php
function getAllCategories ()
{
 include("connexion.php");
 $req ="SELECT * from categorie ";
 $res=$db->query($req);
 $categorie=$res->fetchAll();
 return $categorie;
}
function getAllProducts(){
    include("connexion.php");
    $req ="SELECT * from article ";
    $res=$db->query($req);
    $article=$res->fetchAll();
    return $article;
}
function search($word){
    include("connexion.php");
    $req="SELECT * From article where libelle like '%$word%'";
    $res=$db->query($req);
    $article=$res->fetchAll();
    return $article;
}
function getProduit($id){
    include("connexion.php");
    $req="SELECT * From article where id=$id";
    $res=$db->query($req);
    $article=$res->fetch();
    return $article;
}
function registeration($data)
{
    include("connexion.php");
    $pshash=hash('ripemd160',$data['ps']);
    $req=$db->prepare("INSERT INTO client (nom,prenom,email,ps,telephone,adresse,date_creation) VALUES (?,?,?,?,?,?,?)");
    $res=$req->execute(array($data['nom'],$data['prenom'],$data['email'],$pshash,$data['tel'],$data['adresse'],date('Y-m-d')));
    if ($res)
    {
        return true;
    }
    else
    { 
        return false;
    }
}
function login ($data)
{
    include("connexion.php");
    $email=$data['email'];
    $pshash=hash('ripemd160',$data['ps']);
    $req="SELECT * FROM client where email='$email' AND ps='$pshash'";
    $res=$db->query($req);
    $client=$res->fetch();
    return $client;
}
?>
