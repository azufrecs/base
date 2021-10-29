<?php
	@session_start();
	if($_SESSION["autentica"] != "SI"){
		header("Location: https://tuweb.cu");
		exit();
	}
?>
