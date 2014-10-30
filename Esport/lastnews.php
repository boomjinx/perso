<?php 
	require "config.php";
	mysql_connect(DB_HOST,DB_LOGIN,DB_PASS);
	mysql_select_db(DB_BDD);


	$sql="SELECT * 
 	FROM news N
 	JOIN author A
 	ON N.author_id = A.author_id
 	ORDER BY N.date DESC limit 0,25";

 	$sql2="SELECT * 
 	FROM news N
 	JOIN game G
 	ON N.author_id = G.game_id
 	ORDER BY N.date DESC limit 0,25";


	$req = mysql_query($sql) or die('Erreur SQL !<br/>'.$sql.'<br/>'.mysql_error());
	$req2 = mysql_query($sql2) or die('Erreur SQL !<br/>'.$sql2.'<br/>'.mysql_error());

	while ($data=mysql_fetch_assoc($req)) 
	{
		$datagame=mysql_fetch_assoc($req2);?>
		

		<div class="news"><?php echo $data["name"]; ?>
		<p class="contenu"><?php echo $datagame["name"]; 
		echo $datagame["game_id"];?></p>
		<!--<img src="<?php //echo $data["image"]; ?>" >-->
		<p class="datenews"><?php echo $data["date"] ;?></p><?php

 
	}
?>