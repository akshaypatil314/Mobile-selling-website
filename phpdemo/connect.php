<html>
<body>
<a href='main.html'><h1><Center>Next page</center></h1></a>
<?php
$conn=mysqli_connect("localhost:3307","root","","login")
or die("Cannot connect to the server");

$Name=$_REQUEST['user1'];
$email=$_REQUEST['mail1'];
$code=$_REQUEST['pass1'];
$query="insert into emp (user,mail,pass) values ('$Name','$email',$code)";
$result=mysqli_query($conn,$query) or die(mysqli_connect_error());
$closeconn=mysqli_close($conn);
?>
</body>
</html>
