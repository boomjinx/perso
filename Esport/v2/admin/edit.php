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
				<?php 
					require "../config.php";
					mysql_connect(DB_HOST,DB_LOGIN,DB_PASS);
					mysql_select_db(DB_BDD);
					if(!empty($_POST)){
						extract($_POST);
						$sql="UPDATE news SET titre='$titre', contenu='$contenu', image='$image' WHERE news_id=$news_id";
						$req = mysql_query($sql) or die('Erreur SQL ligne 19!<br/>'.$sql.'<br/>'.mysql_error());
						echo "News Modifiée.<a href=\"index.php\"></a>";
						$_GET["news_id"]=$news_id;
					}

					$sql="SELECT * FROM news WHERE news_id={$_GET["id"]}";
					$req = mysql_query($sql) or die('Erreur SQL ligne 26!<br/>'.$sql.'<br/>'.mysql_error());
					$data=mysql_fetch_assoc($req);
				?>

				<form method="post" action="edit.php">
					<input name="id" type="hidden" value="<?php echo $data["news_id"]; ?>"/>
					Titre :<input type="text" name="titre" value="<?php echo $data["titre"]; ?>"/>
					<br/>
					Image URL :<input type="text" name="image" value="<?php echo $data["image"]; ?>"><br/>
					Contenu :
					<br/>
					<textarea name="contenu"><?php echo $data["contenu"]; ?></textarea><br/><br/>
					<input type="submit" value="Modify News"/>
				</form>
				</div>
			</div>
			<div id="footer">
				<a href="admin/index.php">Gerer les News</a>
			</div>
		</div>
	</body>

</html>