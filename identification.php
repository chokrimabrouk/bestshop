<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans titre</title>
</head>

<body>

<?php 
$maconnexion = mysql_connect("127.0.0.1", "root", "");
 
   mysql_select_db("bestchop",$maconnexion);
   
   

  $mail=$_POST['email'];
    $mdp=$_POST['mdp'];

$req1="SELECT * FROM client  WHERE  email='".$mail."' and mdp='".$mdp."'";  
$res = mysql_query($req1) or die('connexion impossible');

if(mysql_num_rows($res)>=1)
	{  	
   	
			?><script language="javascript">alert('produit ajouté au panier');
			window.location = "accueil.html";
			</script><?php
			
	
	}
else
	{
   echo '<script language="javascript">
   alert("Email et/ou mot de passe invalide");
   </script>';
	?>
	<script language="javascript">window.location = "identification.html";</script>

	<?php
	}
mysql_close($maconnexion);

?>   

</body>
</html>
