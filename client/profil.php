<?php
session_start();
if(!isset($_SESSION['nom']))
{
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    h1 {
  --s: 0.1em; 
  --c: #2c4bff; 
  
  color: #0000;
  padding-bottom: var(--s);
  background: 
    linear-gradient(90deg,var(--c) 50%,#000 0) calc(100% - var(--_p,0%))/200% 100%,
    linear-gradient(var(--c) 0 0) 0% 100%/var(--_p,0%) var(--s) no-repeat;
  -webkit-background-clip: text,padding-box;
          background-clip: text,padding-box;
  transition: 0.5s;
}
h1:hover {--_p: 100%}


body {
  height: 100vh;
  margin: 0;
  display: grid;
  place-content: center;
}
h1 {
  font-family: system-ui, sans-serif;
  font-size: 5rem;
  cursor: pointer;
}
 button{
      padding: 25px 30px;
      display: flex;
      flex-direction: column;
      background-color: transparent;
      color: #03e9f4;
      font-weight: bold;
      border: none;
      border-radius: 5px;
      letter-spacing: 4px;
      overflow: hidden;
      transition: 0.5s;
      cursor:pointer;
    }
    button:hover{
        background: #03e9f4;
        color: #050801;
    }
    .b{
      font-size: 15px;
      text-decoration: none;
      color: #000;
      outline: none;
      font-family: poppins;
    }
    a:hover{
      text-decoration: none;
      color:white;
      outline: none;
      font-family: poppins;
    }
</style>
<body>
    <h1>Bienvenue <?php echo($_SESSION['nom'].' '.$_SESSION['prenom']) ?></h1>
    <button ><a class="b" href="logout.php" >Déconnexion </a>
     </button>
     <button ><a class="b" href="page_produits.php" >Continuer votre shopping </a>
     </button>
</body>
</html>