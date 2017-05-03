<?php 


	$reply =  array();


	if( $_SERVER['REQUEST_METHOD'] == 'GET'){
		return;
	}else if( $_SERVER['REQUEST_METHOD'] == 'POST'  ){
		sginIn();
	}
	
	function sginIn(){
		$username = $_POST['username'];
		$password = $_POST['password'];
		// $reply = array( 'username' => $username, 'password' => $password );
		$reply['username'] = $username;
		$reply['password'] = $password;
		echo '{"success":true,"msg":'. json_encode( $reply['username'] ).'}';
		
	}







?>