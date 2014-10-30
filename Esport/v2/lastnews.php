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
 	ON N.game_id = G.game_id
 	ORDER BY N.date DESC limit 0,25";

	$sql3="SELECT * FROM news";

 	$sql4="SELECT * 
 	FROM news N
 	JOIN game_type GT
 	ON N.author_id = G.game_id
 	ORDER BY N.date DESC limit 0,25";

 	?><div><?php
	$req = mysql_query($sql) or die('Erreur SQL !<br/>'.$sql.'<br/>'.mysql_error());
	$req2 = mysql_query($sql2) or die('Erreur SQL !<br/>'.$sql2.'<br/>'.mysql_error());
	$req3 = mysql_query($sql3) or die('Erreur SQL !<br/>'.$sql3.'<br/>'.mysql_error());

	while ($data=mysql_fetch_assoc($req)) 
	{
		$datagame=mysql_fetch_assoc($req2);
		$datacontenu=mysql_fetch_assoc($req3);?>
		

		
		<div class="news">
			<div class="titledate">
				<div class="title"><?php echo $datacontenu["titre"];?>
			</div><br/><div class="datenews"><?php echo $data["date"] ;?></div>
			</div>
			<p class="contenu">
				<?php echo $datacontenu["contenu"]; ?>
			</p><br/>
	<img src="<?php echo $datacontenu["image"]; ?>" >


		<p class="datenews"></p>
		<div class="info">
			<?php
			?>Author: <?php echo $data["name"];?><br/><?php
			?><?php if ($datagame["name"] != "false") {
					echo "Game: ".$datagame["name"];
					}
				?><br/><?php
			?>
		</div><div class="void"></div>
		</div>
		<?php

		
	}


?>
		