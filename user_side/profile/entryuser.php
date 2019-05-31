<?php
	if(!(isset($_SESSION['uid'])))
	{
		header("location:index.php?msg1");
	}
?>