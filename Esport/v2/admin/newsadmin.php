<?php 
	require "../config.php";
	mysql_connect(DB_HOST,DB_LOGIN,DB_PASS);
	mysql_select_db(DB_BDD);

	$sql="SELECT * FROM news";
	$req = mysql_query($sql) or die('Erreur SQL !<br/>'.$sql.'<br/>'.mysql_error());
	?><div class="news"><?php
	while ($data=mysql_fetch_assoc($req)) {
		echo "<p>{$data["titre"]} -- ";
		echo "<a href=\"edit.php?id={$data["news_id"]}\">Modifier cette News<a/> -- ";
		echo "<a href=\"delete.php?id={$data["news_id"]}\">x<a/>";
		echo "</p>";
		
	}
?></div><?php
?>
