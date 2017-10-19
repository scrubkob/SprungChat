<?php

require_once("src/config.php");

$username = "";
if(isset($_POST['content'])){ 

	if(empty($_POST['username']) || empty($_POST['content'])){ 
    	echo '<script>alert("Bitte Username oder Nachricht eingeben")</script>'; 
	} else { 
	    //Variablen definieren und mit "POST" Daten füllen (Mit htmlspecialchars filtern..) 
	    $username = htmlspecialchars($_POST['username']); 
	    $content = htmlspecialchars($_POST['content']); 

		$sql = "INSERT INTO messages (username, content) values (:username, :content)";
	    $params = array(":username" => $username, ":content" => $content);
	    sql::exe($sql, $params);
	}
}



require_once("templates/header.html");
?>

<div id="messages">
	<?php
	require_once("src/getMessages.php");
	?>
</div>

<form action="index.php" method="post">
	<div class="container">
		<div class="row">
			<div class="col-md-2">
				<input class="form-control" type="text" name="username" placeholder="Name" value="<?=$username?>">
			</div>
			<div class="col-md-8">
				<input class="form-control" type="text" name="content" placeholder="Nachricht">
			</div>
			<div class="col-md-2">
				<button class="btn btn-default" onclick="loadMessages()">Posten</button>
			</div>
		</div>
	</div>
	
</form>

<?php


require_once("templates/footer.html");

?>