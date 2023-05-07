<?php
$con = mysqli_connect('localhost','root');
if($con){
    echo "Connection successful";
}else{
    echo "No Connection";
}

mysqli_select_db($con,'graceuserdata');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$Message =$_POST['Message'];

$query = "insert into userinfodata(user,email,mobile, Message)
values('$user','$email','$mobile','$Message')";

mysqli_query($con,$query);

header('location:index.php')


?>