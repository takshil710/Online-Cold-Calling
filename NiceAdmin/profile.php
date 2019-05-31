<?php
	include('control.php');
	
	
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
	.abc{
			animation-name:!important;
			margin-left:900px;			
			
			
		}
</style>
</head>

<body>
<div><h1>Welcome: <?php echo $_SESSION['aname'];?></h1></div>
<div ><img src="<?php echo $uinfo1[0]->file;?>" align="top" height="200px" width="200px"></h1></div>
<div class="abc" style="color:#00F;"><a href="logout.php">Logout</a></div>
<div class="abc" style="color:#FF0000;"><a href="changepassword.php">change password</a></div>
<form method="post">
	<table align="center" border="1">
    	<tr>
        	<th>uid</th>
            <th>username</th>
            <th>password</th>
            <th>email</th>
            <th>gender</th>
            <th>hobby</th>
            <th>country</th>
            <th>state</th>
            <th>file</th>
            <th>status</th>
            <th colspan="2" align="center">Action</th>
        </tr>
        <?php
			foreach($uinfo1 as $u)
				{
					?>
                    <tr>
					<td><?php echo $u->aid;?></td>
                    <td><?php echo $u->aname;?></td>
                    <td><?php echo $u->apass;?></td>
                    <td><?php echo $u->email;?></td>
                    <td><?php echo $u->gender;?></td>
                    <td><?php echo $u->hobby;?></td>
                    <td><?php $cid=$u->cid;
								$carr=array("cid"=>$cid);
								$cname=$mobj->selectwhere($connect,"country",$carr);
								echo $cname[0]->cname;?></td>
                    <td><?php $sid=$u->sid;
								$sarr=array("sid"=>$sid);
								$sname=$mobj->selectwhere($connect,"state",$sarr);
								echo $sname[0]->sname;?></td>
                    <td><img src="<?php echo $u->file;?>" height="100px" width="100px" /></td>
                    <td><a href="profile.php?st_id=<?php echo $u->uid;?> && sta=<?php echo $u->status;?>" ><?php echo $u->status;?></a></td>	
                    <td><a href="edit.php?edit_id=<?php echo $u->uid;?>">edit</a>
                    <a href="profile.php?del_id=<?php echo $u->uid;?>">delete</a></td>
					</tr>
				<?php
                }
		?>
    </table>
</form>
</body>
</html>