<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans titre</title>
</head>

<body>
<?php 
$maconnexion = mysql_connect("localhost","root",""); 
mysql_select_db("bestchop",$maconnexion);

isset($_POST["nom"])?$nom=$_POST["nom"]:$nom="";

isset($_POST["prenom"])?$prenom=$_POST["prenom"]:$prenom="";
isset($_POST["rs"])?$rs=$_POST["rs"]:$rs="";
isset($_POST["ad"])?$ad=$_POST["ad"]:$ad="";
isset($_POST["tel"])?$tel=$_POST["tel"]:$tel="";


isset($_POST["fax"])?$fax=$_POST["fax"]:$fax="";





isset($_POST["email"])?$email=$_POST["email"]:$email="";

isset($_POST["message"])?$message=$_POST["message"]:$message="";



$req="INSERT INTO contact (nom, prenom, rs, ad,tel,fax,email,message)
VALUES('$nom','$prenom','$rs', '$ad', '$tel','$fax', '$email', '$message')";

$requete = mysql_query($req) or die( mysql_error() ) ;
//affichage des résultats, pour savoir si l'insertion a marchée:
if($requete)
  {
      echo '<script language="javascript">
    alert("votre message a été envoyé avec succé merci d\'avoir visiter notre site  ");
    </script>';

	 
    
  }
  else
  {
     echo '<script language="javascript">
    alert("désolé votre message n\'a pas été envoyé, Veuillez essayer plut tard et merci d\'avoir visité notre site");
    </script>';
  }?>
 <script language="javascript">window.location = "contact.html";</script>
<?php
   mysql_close($maconnexion);
   
  
   ?>
</body>
</html>
