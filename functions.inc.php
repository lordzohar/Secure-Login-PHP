<?php
 
function show_userbox()
{
    // retrieve the session information

    $u = $_SESSION['username'];
    $uid = $_SESSION['loginid'];
    // display the user box
    echo "<div id='userbox'>
	 Welcome $u
		<ul>
        ";
        echo "$u";
        include ("comment.php");
        echo "
		   <li><a href='./logout.php'>Logout</a></li>
		</ul>
             </div>";
 
}
?>