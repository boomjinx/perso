<?php 
	$sql="SELECT * FROM news";
	$req = mysql_query($sql) or die('Erreur SQL !<br/>'.$sql.'<br/>'.mysql_error());
	while ($data=mysql_fetch_assoc($req)) {
		echo "<p>{$data["titre"]}";
		echo "</p>";
	}
?>