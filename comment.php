
<?php 
session_start();
include ('db_connect.inc.php');


 include ("nav.php");



    $u = $_SESSION['username'];
    $uid = $_SESSION['loginid'];


    echo "<div id='userbox'>
	 Welcome $u
		
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
<form action="<?php echo "comment.php" ?>" method="post">
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
 

 
$name = $_POST["name"];

$comment = $_POST["comment"];


mysqli_query($conn,"INSERT INTO comment (name,comment) VALUES ('$name','$comment')"); 

echo '<center> Comment Successfully Submitted </center>';
echo "Your Session id is ",session_id();
}

 ?>

