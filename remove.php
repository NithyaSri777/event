<?php 
$dbcon=mysqli_connect("localhost","root","","event");
                    // Server,UserId(default root),password(default empty, if set have to give password),databasename
if(!$dbcon){
   die("Error in connecting..".mysqli_connect_error());
}

$eventname=$_POST['eventname'];//method=post in html file is used here


$query="DELETE FROM EVENTDETAIL WHERE eventname= '$eventname' ";
if (mysqli_query($dbcon,$query)){
     include 'redirect.php';
}
else
{
    echo "Error".mysqli_error($dbcon);
}
?>