# SQLCmdUsingPHP
could use this to control MySql Database with Post or get

GET_Insert.php	

	- a api for insert data to MySql using GET
	- argv : 
	
	$dbname = isset($_GET["dbname"])?$_GET["dbname"]:null;
	$hostIP = isset($_GET["hostIP"])?$_GET["hostIP"]:null;
	$user = isset($_GET["user"])?$_GET["user"]:null;
	$password = isset($_GET["password"])?$_GET["password"]:null;
	//SQL command
	$c = isset($_GET["c"])?$_GET["c"]:null;

GET_SearchData.php	

	- a api for Search Data from MySql using GET
	- argv : 
	
	$dbname = isset($_GET["dbname"])?$_GET["dbname"]:null;
	$hostIP = isset($_GET["hostIP"])?$_GET["hostIP"]:null;
	$user = isset($_GET["user"])?$_GET["user"]:null;
	$password = isset($_GET["password"])?$_GET["password"]:null;
	//SQL command
	$c = isset($_GET["c"])?$_GET["c"]:null;
POST_Insert.php	

	- a api for insert data to MySql using POST
	- argv : 
	
	$dbname = isset($_POST["dbname"])?$_POST["dbname"]:null;
	$hostIP = isset($_POST["hostIP"])?$_POST["hostIP"]:null;
	$user = isset($_POST["user"])?$_POST["user"]:null;
	$password = isset($_POST["password"])?$_POST["password"]:null;
	//SQL command
	$c = isset($_POST["c"])?$_POST["c"]:null;
POST_SearchData.php

	- a api for Search Data from MySql using POST
	- argv : 
	
	$dbname = isset($_POST["dbname"])?$_POST["dbname"]:null;
	$hostIP = isset($_POST["hostIP"])?$_POST["hostIP"]:null;
	$user = isset($_POST["user"])?$_POST["user"]:null;
	$password = isset($_POST["password"])?$_POST["password"]:null;
	//SQL command
	$c = isset($_POST["c"])?$_POST["c"]:null;
