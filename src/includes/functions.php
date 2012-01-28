<?php
	include("config.php");
	
	function connect(){
		global $host,$user,$pwd,$db;
		mysql_connect($host,$user,$pwd);
		mysql_select_db($db);
	}
	
	function dbquery($sql){
		return mysql_query($sql);
	}
	
	connect();
?>