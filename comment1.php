
<?php 
session_start();
session_regenerate_id();
include ('db_connect.inc.php');


 include ("nav.php");



    $u = $_SESSION['username'];
    $uid = $_SESSION['loginid'];


    echo "<div id='userbox'>
	 Welcome To Secure Commment  Page $u
		
             </div>";
    ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Comment Box</title>
<style>

body{
 margin:0px;
 font-family:Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', serif;
 }

input[type=text], select {
 width: 100%;
 border-radius: 5px;
 margin: 7px 0;
 border: 1px solid #ccc;
 padding: 14px 18px; 
 display: inline-block;
 box-sizing: border-box;
}

input[type=submit]:hover {
 background-color: #00a7d1;
}

textarea, select {
 width: 100%;
 border-radius: 5px;
 margin: 7px 0;
 border: 1px solid #ccc;
 padding: 14px 18px; 
 display: inline-block;
 box-sizing: border-box;
}

input[type=submit] {
 width: 100%;
 border: none;
 color: white;
 padding: 14px 20px;
 background-color: #01c9fb;
 margin: 8px 0;
 cursor: pointer;
 border-radius: 4px;
 
}

</style>

</head>
<body>
<table bgcolor="#f2f2f2" style="padding:50px" align="center">
<form action="<?php echo "comment1.php" ?>" method="post">
<tr>
<td> Name : </td><td><input type="text" name="name"></td>
</tr>


<tr>
<td> Comment : </td><td><textarea name="comment" rows="6" cols="50"></textarea></td>
</tr>
<tr>
<td><input type="submit" name="submit"></td></tr>

</form>
</table>



<?php
if(isset($_POST["submit"]))
{
 


$name = strip_tags($_POST["name"]);

$comment = strip_tags($_POST["comment"]);

echo "name ",$name;
echo "<br>comment ",$comment;

if(!empty($_SERVER["HTTP_CLIENT_IP"]))
{
	//CHECK FOR IP FROM SHARED INTERNET
	$ip=$_SERVER["HTTP_CLIENT_IP"];
}
elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])) {
	#CHECK FOR PROXY SERVER
	$ip=$_SERVER["HTTP_X_FORWARDED_FOR"];
}
else{
	$ip=$_SERVER["REMOTE_ADDR"];
}
//THIS WILL PRINT THE IP ADDRESS
echo "<br>ip $ip";
echo "<br>Your Session id is ",session_id();
$s=session_id();
mysqli_query($conn,"INSERT INTO `securecomment` (`ID`, `sessionid`, `ipaddress`, `name`, `comment`) VALUES (NULL, '$s', '$ip', '$name', '$comment')");

}

 ?>

