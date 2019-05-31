<?php

//error_reporting(0);
	include('model.php');
	session_start();
	
	$obj=new model;
	
	/*login client*/
	if(isset($_POST['login']))
	{
		$n=$_POST['name'];
		$p=$_POST['pass'];
		
		$where=array("emailid"=>$n,"pass"=>$p);
		$udata=$obj->selectwhere($connect,"tbl_clients",$where);
			
		$count=count($udata);	
			if($count>0)
			{
				$_SESSION['clid']=$udata[0]->aid;
				$_SESSION['name']=$n;
				$_SESSION['pass']=$p;		
			//	header("location:profile.php");	
			echo "logged in";
			
			}
			else
			{
				header("location:login.php?msg");
			}	
	
	}
	
	/*login for user*/
	if(isset($_POST['login_user']))
	{
		$e=$_POST['email_id'];
		$p=$_POST['pass'];
		
		$where=array("emailid"=>$e,"pass"=>$p);
		$udata=$obj->selectwhere($connect,"tbl_users",$where);
			
		$count=count($udata);	
			if($count>0)
			{
				$_SESSION['uid']=$udata[0]->uid;
				$_SESSION['email_id']=$e;
				$_SESSION['pass']=$p;		
				$_SESSION['fname']=$udata[0]->fname;
			
				if($udata[0]->type=="both")
				{
					header("location:profile/view_task.php");	
				}
				else if($udata[0]->type=="buyer")
				{
					header("location:profile/view_task.php");	
				}
				else if($udata[0]->type=="seller")
				{
					header("location:profile/index.php");	
				}
			
			
			
			}
			else
			{
				header("location:login.php?msg");
			}	
	
	}
	
	/*insert for clients*/
	
	
	if(isset($_POST['add_client']))
	{
				
		$fn=$_POST['fname'];
		$ln=$_POST['lname'];		
		$nos=$_POST['contact'];
		$em=$_POST['email_id'];
		$p=$_POST['pass'];
		
	$data=array("fname"=>$fn,"lname"=>$ln,"cnumber"=>$nos,"emailid"=>$em,"pass"=>$p);
	
		$obj->insertdata($connect,"tbl_clients",$data);
		header("location:login.php");
	}
	/* Select from database to display in faqs*/
	$faq_select_all=$obj->selectall($connect,'tbl_faqs');
	
	/*insert for common user*/
	
	
	if(isset($_POST['add_user']))
	{
				
		$fn=$_POST['fname'];
		$ln=$_POST['lname'];		
		$nos=$_POST['contact'];
		$em=$_POST['email_id'];
		$p=$_POST['pass'];
		$t=$_POST['type'];
		
	$data=array("fname"=>$fn,"lname"=>$ln,"cnumber"=>$nos,"emailid"=>$em,"pass"=>$p,"type"=>$t);
	
		$obj->insertdata($connect,"tbl_users",$data);
		header("location:login.php");
	}
	
	/*insert for tasks*/
	
	
	if(isset($_POST['add_task']))
	{	
	
		 $user_id=$_SESSION['uid'];	
		$sc=$_POST['selectcaller'];
		$tn=$_POST['tname'];
		$ed=$_POST['entrydate'];		
		$f=$_POST['features'];
		$d=$_POST['description'];
		$p=$_POST['price'];
		
		    $data=array("client_id"=>$user_id,"caller_id"=>$sc,"tname"=>$tn,"date_of_entry"=>$ed,"features"=>$f,"description"=>$d,"price"=>$p);

		$obj->insertdata($connect,"tbl_tasks",$data);
		header("location:view_task.php");			
	}
	
	/*one to many display using foreign key*/
if(isset ($_SESSION['uid']))
	{
	$where=array("client_id"=>$_SESSION['uid']);
	
	$task_all_data=$obj->selectwhere($connect,"tbl_tasks",$where);
	}
	$call_all_data=$obj->selectall($connect,"tbl_users");
	/*active inactive button*/
	/*view and change status of tasks*/
	
if(isset($_REQUEST['status_task']))
{
	$status_task=$_REQUEST['status_task'];
	
	$where=array("tskid"=>$status_task);
	$data=array("status"=>"inactive");
	$obj->updateddata($connect,"tbl_tasks",$data,$where);
	header("location:profile/view_task.php");
	
}



		/*edit a task*/
	if(isset($_REQUEST['edit_task']))
	{
		$task_id=$_GET['edit_task'];
		$where=array("tskid"=>$task_id);
		$fetcht=$obj->selectwhere($connect,"tbl_tasks",$where);
		
		if(isset($_POST['edit_task']))
	{
				
		echo $user_id=$_SESSION['uid'];	
		$sc=$_POST['selectcaller'];
		$tn=$_POST['tname'];
		$ed=$_POST['entrydate'];		
		$f=$_POST['features'];
		$d=$_POST['description'];
		$p=$_POST['price'];
		
		$data=array("caller_id"=>$sc,"client_id"=>$user_id,"tname"=>$tn,"date_of_entry"=>$ed,"features"=>$f,"description"=>$d,"price"=>$p);
		
	
		$obj->updateddata($connect,"tbl_tasks",$data,$where);
		header("location:view_task.php");			
	}
	
	
	}
	
	/*delete a task*/
	
	if(isset($_REQUEST['del_task']))
			{
				$did=$_REQUEST['del_task'];
				$where=array("tskid"=>$did);
				
				$obj->deletedata($connect,"tbl_tasks",$where);	
				header('location:profile/view_task.php');
			}
	$fudata=$obj->selectall($connect,"tbl_tasks");
	
	$join=$obj->jointwo($connect,"tbl_users","tbl_tasks","tbl_users.uid=tbl_tasks.client_id");
	
	/*select only seller*/
	
?>