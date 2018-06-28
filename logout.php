<?php 
session_start();
if( session_unset('loginid') == true 
		&& session_unset('username')==true ) {
   header('Location: index.php');
   session_destroy();
} else {
   unset($_SESSION['loginid']);
   unset($_SESSION['username']);
   session_destroy();
   header('Location: index.php');
}
?>