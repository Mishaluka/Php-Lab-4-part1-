<?php
 
if (isset($_POST['submit'])) { 
 $usename=$_POST['username'];
  $password=$_POST['password'];
  if (($usename=='John')&& ($password=="123")) {
  echo "Your information is correct";
   }
  else {
  	echo "User name or password is not correct";
  }
}
?>
