<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style>
	
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #71969e;
}

li {
    float: left;
}
.right{float: right;}
li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #7bd0d0;
}

</style>
<body>
<nav class="nav">
    <ul>
        
        <li><a href="comment.php">Un-Secure Comment</a></li>
        <li><a href="comment1.php">Secure Comment</a></li>
        <li><a href="view.php">View Comment</a></li>
        <li class="right"><a href="logout.php">Logout</a></li>
    </ul>
</nav>
</body>
</html>