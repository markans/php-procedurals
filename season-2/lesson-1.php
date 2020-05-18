<!-- LESSON [1] -->
<?php  

	if(isset($_POST["btn_1"])){
		echo 'napindot ko na si 1st button';
	}

	if(isset($_POST["btn_2"])){
		echo 'napindot ko na si 2nd button';
	}

?>

<form method="POST">
	<input type="submit" name="btn_1" value="1st Button">
	<input type="submit" name="btn_2" value="2st Button">
</form>

<!-- ENDLESSON [1] -->
