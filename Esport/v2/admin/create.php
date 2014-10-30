<?php 
	require "../config.php";
	mysql_connect(DB_HOST,DB_LOGIN,DB_PASS);
	mysql_select_db(DB_BDD);
	extract($_POST);
	$sql="INSERT INTO news (titre,contenu,image,author_id,news_type_id,game_id,game_type_id) VALUES ('$titre','$contenu','$image','$author','$news_type_id','$game_id','$game_type_id')";
	$req = mysql_query($sql) or die('Erreur SQL !<br/>'.$sql.'<br/>'.mysql_error());
	header("Location: index.php");
?>