<?php
	include('model.php');
	session_start();
	
	$obj=new model;
	
	
	if(isset($_POST['login']))
	{
		$n=$_POST['name'];
		$p=$_POST['pass'];
		
		$where=array("aname"=>$n,"apass"=>$p);
		$udata=$obj->selectwhere($connect,"tbl_admin",$where);
			
		$count=count($udata);	
			if($count>0)
			{
				$_SESSION['aid']=$udata[0]->aid;
				$_SESSION['aname']=$n;
				$_SESSION['apass']=$p;		
				header("location:listcallers.php");	
			
			}
			else
			{
				header("location:index.php?msg");
			}
				
	
	}
	/*insert for callers*/
	
	
	if(isset($_POST['add_caller']))
	{
				
		$fn=$_POST['fname'];
		$ln=$_POST['lname'];		
		$nos=$_POST['contact'];
		$em=$_POST['email_id'];
		$p=$_POST['pass'];
		
	$data=array("fname"=>$fn,"lname"=>$ln,"cnumber"=>$nos,"emailid"=>$em,"pass"=>$p);
	
		$obj->insertdata($connect,"tbl_callers",$data);
		header("location:listcallers.php");			
	}
	
	
	
	$call_all_data=$obj->selectall($connect,"tbl_callers");
	
	/*insert for verifiers*/
	
	
	if(isset($_POST['add_verifier']))
	{
				
		$fn=$_POST['fname'];
		$ln=$_POST['lname'];		
		$nos=$_POST['contact'];
		$em=$_POST['email_id'];
		$p=$_POST['pass'];
		
	$data=array("fname"=>$fn,"lname"=>$ln,"cnumber"=>$nos,"emailid"=>$em,"pass"=>$p);
	
		$obj->insertdata($connect,"tbl_verifiers",$data);
		header("location:listverifiers.php");			
	}
	
	
	
	$verifier_all_data=$obj->selectall($connect,"tbl_verifiers");
	
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
		header("location:listclients.php");			
	}
	
	
	
	$client_all_data=$obj->selectall($connect,"tbl_clients");
	
	/*insert for tasks*/
	
	
	if(isset($_POST['add_task']))
	{
				
		$tn=$_POST['tname'];
		$ed=$_POST['entrydate'];		
		$img=$_POST['image'];
		$f=$_POST['features'];
		$d=$_POST['description'];
		$p=$_POST['price'];
		
		    $data=array("tname"=>$tn,"date_of_entry"=>$ed,"image"=>$img,"features"=>$f,"description"=>$d,"price"=>$p);
	
		$obj->insertdata($connect,"tbl_tasks",$data);
		header("location:listtasks.php");			
	}
	
	
	
	$task_all_data=$obj->selectall($connect,"tbl_tasks");
	
	/*insert for faqs*/
	
	
	if(isset($_POST['add_faq']))
	{
				
		$q=$_POST['question'];
		$a=$_POST['answer'];		
		
		
		    $data=array("question"=>$q,"answer"=>$a);
	
		$obj->insertdata($connect,"tbl_faqs",$data);
		header("location:listfaq.php");			
	}
	
	
	
	$faq_all_data=$obj->selectall($connect,"tbl_faqs");
	
	/*delete a caller*/
	
	if(isset($_REQUEST['del_caller']))
			{
				$did=$_REQUEST['del_caller'];
				$where=array("calid"=>$did);
				
				$obj->deletedata($connect,"tbl_callers",$where);	
				header('location:listcallers.php');
			}
	$fudata=$obj->selectall($connect,"tbl_callers");
	
	/*delete a verifier*/
	
	if(isset($_REQUEST['del_verifier']))
			{
				$did=$_REQUEST['del_verifier'];
				$where=array("verid"=>$did);
				
				$obj->deletedata($connect,"tbl_verifiers",$where);	
				header('location:listverifiers.php');
			}
	$fudata=$obj->selectall($connect,"tbl_verifiers");
	
	/*delete a client*/
	
	if(isset($_REQUEST['del_client']))
			{
				$did=$_REQUEST['del_client'];
				$where=array("clid"=>$did);
				
				$obj->deletedata($connect,"tbl_clients",$where);	
				header('location:listclients.php');
			}
	$fudata=$obj->selectall($connect,"tbl_clients");
	
	/*delete a task*/
	
	if(isset($_REQUEST['del_task']))
			{
				$did=$_REQUEST['del_task'];
				$where=array("tskid"=>$did);
				
				$obj->deletedata($connect,"tbl_tasks",$where);	
				header('location:listtasks.php');
			}
	$fudata=$obj->selectall($connect,"tbl_tasks");
	
	/*delete a faq*/
	
	if(isset($_REQUEST['del_faq']))
			{
				$did=$_REQUEST['del_faq'];
				$where=array("fid"=>$did);
				
				$obj->deletedata($connect,"tbl_faqs",$where);	
				header('location:listfaq.php');
			}
	$fudata=$obj->selectall($connect,"tbl_faqs");
		
		
		/*edit caller*/
		
	if(isset($_REQUEST['edit_caller']))
	{
		$id=$_GET['edit_caller'];
		$where=array("calid"=>$id);
		$fetchc=$obj->selectwhere($connect,"tbl_callers",$where);	
		if(isset($_POST['edit_caller']))
		{
				
			$fn=$_POST['fname'];
			$ln=$_POST['lname'];		
			$nos=$_POST['contact'];
			$em=$_POST['email_id'];
			$p=$_POST['pass'];
			
			$data=array("fname"=>$fn,"lname"=>$ln,"cnumber"=>$nos,"emailid"=>$em,"pass"=>$p);
		
			$obj->updateddata($connect,"tbl_callers",$data,$where);
			header("location:listcallers.php");			
		}
	}
	
	/*edit a verifier*/
	
	if(isset($_REQUEST['edit_verifier']))
	{
		$verifier_id=$_GET['edit_verifier'];
		$where=array("verid"=>$verifier_id);
		$fetchv=$obj->selectwhere($connect,"tbl_verifiers",$where);
		
		if(isset($_POST['edit_verifier']))
				{
					
			$fn=$_POST['fname'];
			$ln=$_POST['lname'];		
			$nos=$_POST['contact'];
			$em=$_POST['email_id'];
			$p=$_POST['pass'];
			
			$data=array("fname"=>$fn,"lname"=>$ln,"cnumber"=>$nos,"emailid"=>$em,"pass"=>$p);
		
			$obj->updateddata($connect,"tbl_verifiers",$data,$where);
			header("location:listverifiers.php");			
					}
	}
	
	/*edit a task*/
	if(isset($_REQUEST['edit_task']))
	{
		$task_id=$_GET['edit_task'];
		$where=array("tskid"=>$task_id);
		$fetcht=$obj->selectwhere($connect,"tbl_tasks",$where);
		
		if(isset($_POST['edit_task']))
	{
				
		$tn=$_POST['tname'];
		$ed=$_POST['entrydate'];		
		$img=$_POST['image'];
		$f=$_POST['features'];
		$d=$_POST['description'];
		$p=$_POST['price'];
		
		    $data=array("tname"=>$tn,"date_of_entry"=>$ed,"image"=>$img,"features"=>$f,"description"=>$d,"price"=>$p);
	
		$obj->updateddata($connect,"tbl_tasks",$data,$where);
		header("location:listtasks.php");			
	}
	
	
	}
	
	/*edit faqs*/
	if(isset($_REQUEST['edit_faq']))
	{
		$task_id=$_GET['edit_faq'];
		$where=array("fid"=>$task_id);
		$fetchfaq=$obj->selectwhere($connect,"tbl_faqs",$where);
		
		if(isset($_POST['edit_faq']))
	{
				
		$q=$_POST['question'];
		$a=$_POST['answer'];		
		
		
		    $data=array("question"=>$q,"answer"=>$a);
	
		$obj->updateddata($connect,"tbl_faqs",$data,$where);
		header("location:listfaq.php");			
	}
		
	
	}


?>