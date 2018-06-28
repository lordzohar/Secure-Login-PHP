<?php 
session_start();
include ('db_connect.inc.php');


 include ("nav.php");
?>
<h1>View Your Comments</h1>
<form action="view.php" method="post">
	<select name="select">
	<option value=0>Without IDS</option>
	<option value=1>With IDS</option>
	<input type="submit" value="Submit" name="submit">
</select>


</form>




<?php


if(isset($_POST["submit"]))
{
 
 
	$select = $_POST["select"];

	if ($select==0) {
			$query="SELECT name,comment FROM `comment`";
		$result=mysqli_query($conn,$query);

		echo"<table>
		<tr>
		<th>Person's Name</th>
		<th>Comment</th>
		</tr>";
		while($row=mysqli_fetch_row($result)){
		echo "<tr>
		<td>$row[0]</td>
		<td>$row[1]</td>

		</tr>";
		}
		echo"</table>";
	}



	else{
		$query="SELECT sessionid,ipaddress,name,comment FROM `securecomment`";
		$result=mysqli_query($conn,$query);

		echo"<table>
		<tr>
		<th>Session</th>
		<th>IP address</th>
		<th>Person's Name</th>
		<th>Comment</th>
		</tr>";
		while($row=mysqli_fetch_row($result)){
		echo "<tr>
		<td>$row[0]</td>
		<td>$row[1]</td>
		<td>$row[2]</td>
		<td>$row[3vv:gbccg]</td>
		</tr>";
		}
		echo"</table>";
		}
}
/*
$comment = $_POST["comment"];



*/




?>