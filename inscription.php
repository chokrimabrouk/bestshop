<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>contact</title>
</head>

<body>
<?php 
$maconnexion = mysql_connect("localhost","root",""); 
mysql_select_db("bestchop",$maconnexion);

isset($_POST["nom"])?$nom=$_POST["nom"]:$nom="";

isset($_POST["soc"])?$soc=$_POST["soc"]:$soc="";


isset($_POST["tel"])?$tel=$_POST["tel"]:$tel="";


isset($_POST["fax"])?$fax=$_POST["fax"]:$fax="";




isset($_POST["ad"])?$ad=$_POST["ad"]:$ad="";
isset($_POST["email"])?$email=$_POST["email"]:$email="";
isset($_POST["mdp"])?$mdp=$_POST["mdp"]:$mdp="";

isset($_POST["rmdp"])?$rmdp=$_POST["rmdp"]:$rmdp="";
isset($_POST["j"])?$j=$_POST["j"]:$j="";
isset($_POST["m"])?$m=$_POST["m"]:$m="";
isset($_POST["a"])?$a=$_POST["a"]:$a="";
$dn=$j."-".$m."-".$a;

$req="INSERT INTO client (nom, soc, tel, fax,ad,email,mdp,dn)
VALUES('$nom','$soc','$tel', '$fax', '$ad','$email', '$mdp', '$dn')";

$requete = mysql_query($req) or die( mysql_error() ) ;
//affichage des résultats, pour savoir si l'insertion a marchée:
if($requete)
  {
      echo '<script language="javascript">
    alert("votre Inscription a été effectué avec succés merci d\'avoir visiter notre site  ");
    </script>';

	 
    
  }
  else
  {
     echo '<script language="javascript">
    alert("désolé votre inscription n\'a pas été efféctué, Veuillez essayer plut tard et merci d\'avoir visité notre site");
    </script>';
  }?>
 <script language="javascript">window.location = "accueil.html";</script>
<?php
   mysql_close($maconnexion);
   
  
   ?>

</body>
</html>
