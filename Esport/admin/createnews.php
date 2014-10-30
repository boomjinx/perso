<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <title>Esport News</title>
		<?php include 'base/meta.php'; ?>
    <body>
    	<div id="shadow">
			<?php include 'base/header.php'; ?>
			<?php include 'base/menu.php'; ?>
			<div id="body">
				<div id="lastnews">
					<form method="post" action="create.php">
					Titre :<input type="text" name="titre"/><br/>
					Image URL : <input type="text" name="image"><br/>
					Auteur: <input type="text" name="author"><br/>
					News Type : 
					<select id="type" name="news_type_id">
						<option value="0">News type</option>
						<option value="1">Results</option>
						<option value="2">Tournaments Standings</option>
						<option value="3">Analysis</option>
						<option value="4">Report</option>
						<option value="5">Videos</option>
						<option value="6">Photo Report</option>
						<option value="7">Interviews</option>
						<option value="8">Transfers, Sponsorships</option>
						<option value="9">General Announcements</option>
						<option value="10">Esport News Announcements</option>

						
					</select><br/>Game :
					<select id="type" name="game_id">
						<option value="0">Choose Game</option>
						<option value="1">League of Legends</option>
						<option value="2">Dota 2</option>
						<option value="100">none</option>
						
					</select><br/>
					Game type :
					<select id="type" name="game_type_id">
						<option value="0">Choose Game type</option>
						<option value="1">MOBA (Multiplayer Online Battle Arena)</option>
						<option value="2">RTS (Real-time strategy)</option>
						<option value="3">CCG (Collectible Card Game)</option>
						<option value="4">FPS(First-person Shooter)</option>
						<option value="5">Sport</option>
						<option value="6">none</option>
						
					</select><br/>
					Contenu :<br/><textarea name="contenu" style="width:100%"; height="300px;"></textarea>
					<input type="submit" value="Post News"/>
				</form>
				</div>
				<div id="rightbar">
				</div>
			</div>
			<div id="footer">
				<a href="../admin/create.php">Gerer les News</a>
			</div>
		</div>
	</body>

</html>





