<?php
	
	
	$connect=new MySQLi("localhost","root","","cold_calling");
	
		class model
			{
				/*join two tables*/
	 function jointwo($connect,$tbl1,$tbl2,$on)
	{
		$sql="select * from $tbl1 join $tbl2 on $on";
		$ex=$connect->query($sql);
		while($r=$ex->fetch_object())
		{
			$rw[]=$r;
		}
		return $rw;
	}

				function selectall($connect,$tab)
					{
						$sql="select * from $tab";
						$ex=$connect->query($sql);
						while($r=$ex->fetch_object())
							{
								$rw[]=$r;	
							}
							return $rw;
					}	
					
				function selectwhere($connect,$tab,$where)
					{
						$i=0;
						$wkeys=array_keys($where);
						$wval=array_values($where);
						
						$sql="select * from $tab where 1=1 ";
						
						foreach($where as $w)
							{
								$sql.=" and ".$wkeys[$i]."='".$wval[$i]."'";
								$i++;	
							}
							
							$ex=$connect->query($sql);
							while($r=$ex->fetch_object())
								{
									$rw[]=$r;	
								}
								return $rw;
					}
					
				function insertdata($connect,$tab,$data)
					{
						
						$dkeys=array_keys($data);
						$cols=implode(",",$dkeys);
						$dval=array_values($data);
						$values=implode("','",$dval);	
						
							$sql="insert into $tab($cols) values('$values')";
						
						$connect->query($sql);
					}
					
					
					
				
				function updateddata($connect,$tab,$data,$where)
					{
						$i=0;
						$dkeys=array_keys($data);
						$dval=array_values($data);	
						$size=sizeof($data);
						
						$j=0;
						$wkeys=array_keys($where);
						$wval=array_values($where);
						
						$sql="update $tab set ";
						
						foreach($data as $d)
							{
								if($i+1==$size)
									{
										$sql.=" ".$dkeys[$i]."='".$dval[$i]."'";	
									}	
									else
									{
										$sql.=" ".$dkeys[$i]."='".$dval[$i]."',";
										$i++;	
									}
							}
							
							$sql.=" where 1=1 ";
							
							foreach($where as $w)
								{
									$sql.=" and ".$wkeys[$j]."='".$wval[$j]."'";
								 	$j++;	
								}
								$connect->query($sql);								
								
						}
						
					function deletedata($connect,$tab,$where)
						{
							$i=0;
						    $wkeys=array_keys($where);
							$wval=array_values($where);
						
							$sql="delete from $tab where 1=1 ";
						
							foreach($where as $w)
								{
									$sql.=" and ".$wkeys[$i]."='".$wval[$i]."'";
									$i++;	
								}
							
								$connect->query($sql);
						}
			}
	
	/*update*/
	 function update($connect,$table,$data,$where)
	{
		
		$up="update $table set";
		$key=array_keys($data);
		$val=array_values($data);
		$i=0;
		$count=count($data);
		foreach($data as $d)
		{
			if($i+1==$count)
			{
				$up.=" $key[$i] = '$val[$i]'";
			}
			else
			{
				$up.=" $key[$i] = '$val[$i]' , ";
			}
			$i++;
		}
		$up.=" where 1=1 ";
		$wkey=array_keys($where);
		$wval=array_values($where);
		$j=0;
		foreach($where as $w)
		{
		 	$up.=" and $wkey[$j]='$wval[$j]' " ;
			$j++;
		}
		//echo $up; exit;
		$connnect->query($up);
	}
	
	//select * from tbl_users join tbl_tasks on tbl_users.uid=tbl_tasks.client_id
?>