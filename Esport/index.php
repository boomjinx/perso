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
					<?php include 'lastnews.php'; ?>
				</div>
				<div id="rightbar">
					<h1>Last News</h1>
					<?php include 'newsright.php'; ?>
				</div>
			</div>
			<div id="footer">
				<a href="admin/index.php">Gerer les News</a>
			</div>
		</div>
	</body>

</html>