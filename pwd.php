<?php 
$dbcon=mysqli_connect("localhost","root","","event");
                    
if(!$dbcon){
   die("Error in connecting..".mysqli_connect_error());
}
$email=$_POST['email'];
$old=$_POST['old'];
$new=$_POST['new'];

$query="select password from admin where email='$email' ";

$res=mysqli_query($dbcon,$query);
$row=mysqli_fetch_row($res);
if($res->num_rows==0) echo "Please enter admin email id.The Email you have entered does not have access as admin!";
else{
if($old==$row[0]){ 
    $q="update admin set password='$new' where email='$email' ";
    mysqli_query($dbcon,$q);
    echo "New Password Updated!";
}
else{
   echo "Invalid Old Password!";
}
}

?>