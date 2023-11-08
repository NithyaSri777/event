<?php 
$dbcon=mysqli_connect("localhost","root","","event");
                    // Server,UserId(default root),password(default empty, if set have to give password),databasename
if(!$dbcon){
   die("Error in connecting..".mysqli_connect_error());
}
$email=$_POST['email'];
$password=$_POST['password'];//method=post in html file is used here

$query="select password from admin where email='$email' ";

$res=mysqli_query($dbcon,$query);
$row=mysqli_fetch_row($res);
if($res->num_rows==0) echo "Please enter admin email id.The Email you have entered does not have access as admin!";
else{
if($password==$row[0]){
   include 'adminindex.html';  
}
else{
   echo "Invalid Password!";
}
}

?>