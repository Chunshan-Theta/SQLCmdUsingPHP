<?php
	$dbname = isset($_POST["dbname"])?$_POST["dbname"]:null;
	$hostIP = isset($_POST["hostIP"])?$_POST["hostIP"]:null;
	$user = isset($_POST["user"])?$_POST["user"]:null;
	$password = isset($_POST["password"])?$_POST["password"]:null;
	//SQL command
	$c = isset($_POST["c"])?$_POST["c"]:null;
	
	if($password==null){
		echo "no password";
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
	else if($c==null){
		echo "no SQL command";
	}
	else{
		$result = Search_mysqlQuery($c,$dbname,$hostIP,$user,$password);

		$result = json_encode($result);
		print_r($result);

		
	}
	
	
	
	
	

	
	function Search_mysqlQuery($sql,$dbname,$hostIP,$user,$password) {
		/* Connect to a MySQL database using driver invocation 
		$dbname='';
		$hostIP='';
		$user = '';
		$password = '';
		*/
		$dsn = 'mysql:dbname='.$dbname.';host='.$hostIP;
		$result = null;
		try {
			$dbh = new PDO($dsn, $user, $password);
			$result = $dbh->query($sql)->fetchAll(PDO::FETCH_OBJ);	
		} catch (PDOException $e) {
			echo 'Connection failed: '.$e->getMessage();
		}
		return $result;
	}
	//SELECT * FROM `main` WHERE `Surl` = 'zEGK33FBdE8' ORDER BY `id` DESC LIMIT 1

?>