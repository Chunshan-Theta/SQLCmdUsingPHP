<?php
	$dbname = isset($_POST["dbname"])?$_POST["dbname"]:null;
	$hostIP = isset($_POST["hostIP"])?$_POST["hostIP"]:null;
	$user = isset($_POST["user"])?$_POST["user"]:null;
	$password = isset($_POST["password"])?$_POST["password"]:null;
	//SQL command
	$c = isset($_POST["c"])?$_POST["c"]:null;

	if($c==null){
		echo "no SQL command";
	}
	else if($dbname==null){
		echo "no dbname";
	}
	else if($hostIP==null){
		echo "no hostIP";
	}
	else if($user==null){
		echo "no user";
	}
	else if($password==null){
		echo "no password";
	}
	else{
		Insert_mysqlQuery($c,$dbname,$hostIP,$user,$password);
	}
	
	
	
	function Insert_mysqlQuery($sql,$dbname,$hostIP,$user,$password) {
		/* Connect to a MySQL database using driver invocation 
		$dbname='';
		$hostIP='';
		$user = '';
		$password = '';
		*/
		
		$dsn = 'mysql:dbname='.$dbname.';host='.$hostIP;
		try {
			$dbh = new PDO($dsn, $user, $password);
			$dbh->query($sql);	
			echo 'OK';
		} catch (PDOException $e) {
			echo 'Connection failed: '.$e->getMessage();
		}
		
	}
?>
