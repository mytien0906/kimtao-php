<?php 
    session_start();
	include ("ajax_config.php");

	$d->reset();
	$sql="select * from table_member where email='".$_POST["email"]."' and email!='' ";
	$d->query($sql);
	$member = $d->result_array();


	if(count($member)>0){
		$_SESSION[$login_name] = true;
		$_SESSION['member']['isLoggedIn']=true;
		$_SESSION['member']['id'] = $member[0]['id'];
		$_SESSION['member']['name'] =$member[0]["ten"];
		$_SESSION['member']['username'] =$member[0]["email"];
		$_SESSION['member']['pass'] = $member[0]['password'];
		$_SESSION['member']['diachi'] = $member[0]['diachi'];
		$_SESSION['member']['dienthoai'] = $member[0]['dienthoai']; 	
		$_SESSION['member']['hienthi'] = $member[0]['hienthi'];
		$_SESSION['member']['role'] = $member[0]['role'];
		$result = 1;
		$email=1;

	} else {

		$d->reset();
		$sql="select * from table_member where facebook_auth_id='".$_POST["id"]."' ";
		$d->query($sql);
		$member = $d->result_array();

		if(count($member)>0){
			$_SESSION[$login_name] = true;
			$_SESSION['member']['isLoggedIn']=true;
			$_SESSION['member']['id'] = $member[0]['id'];
			$_SESSION['member']['ten'] =$member[0]["ten"];
			$_SESSION['member']['pass'] = $member[0]['password'];
			$_SESSION['member']['diachi'] = $member[0]['diachi'];
			$_SESSION['member']['dienthoai'] = $member[0]['dienthoai']; 	
			$_SESSION['member']['hienthi'] = $member[0]['hienthi'];
			$_SESSION['member']['role'] = $member[0]['role'];
			$result = 1;
			$email=0;
		} else {
				if($_POST['log']=='facebook'){
					$sql="insert into table_member(ten,email,hienthi,ngaytao,facebook_auth_id,active) values('".$_POST["name"]."','".$_POST["email"]."','1','".time()."','".$_POST['id']."','1')";
				}else{
					$sql="insert into table_member(ten,email,hienthi,ngaytao,google_auth_id,active) values('".$_POST["name"]."','".$_POST["email"]."','1','".time()."','".$_POST['id']."','1')";
				}
				
				if($d->query($sql)){
					$id=mysql_insert_id();
					$_SESSION[$login_name] = true;
					$_SESSION['member']['isLoggedIn']=true;
					$_SESSION['member']['username'] = $_POST["email"];
					$_SESSION['member']['name'] = $_POST["name"];
					$_SESSION['member']['id'] = $id;
					$_SESSION['member']['facebook_auth_id'] = $_POST["id"];
		    		$result = 1;
		    		
		    	} else {
		    		$result = 0;
		    	}

			    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
			    	$email=1;
			    } else {
			    	$email=0;
			    }

    	}
	}

	$result_arr = array('result' =>$result ,'ten'=>$_POST['name'],'email'=>$_POST['email']);

	echo json_encode($result_arr);

?>