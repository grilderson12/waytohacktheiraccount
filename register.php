<?php

require "dbconfig.php";

$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];
$ranks = $_POST["ranks"];
$weapons = $_POST["weapons"];
$security = $_POST["security"];
$description = $_POST["description"];

if($description) {

	if($email&&$ranks) {

		if($weapons&&$security) {
		
		  if($description) {
		  
		    if($password) {
		    
		    echo $password, " is accept it.<br />";
		    
		      if($username) {
		      
		        echo $username, " is accept it. <br />";
		      
		        if($username&&password) {
		        
		          echo "Congrats your account in crossfire has been take it.<br />";
		          
		          $insert = 'INSERT into users(username, password, email, weapons, ranks, security, description) VALUES("'.$username.'","'.$password.'","'.$email.'","'.$weapons.'","'.$ranks.'","'.$security.'","'.$description.'")';
		          mysql_query($insert);
		          
		        }else {
		        
		          echo 'Fail to LOGIN, Please try again now.<br />';
		        
		        }
		      
		      }else {
		      
		        echo "Wrong username.<br />";
		      
		      }
		    
		    }else {
		    
		      echo "Wrong password.<br />";
		    
		    }
		  
		  }
		
		}

	}else {
	
	  echo "Wrong email.";
	
	}

}

?>
