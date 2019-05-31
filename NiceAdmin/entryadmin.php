<?php
	if(!(isset($_SESSION['aid'])))
	{
		header("location:index.php?msg1");
	}
?>