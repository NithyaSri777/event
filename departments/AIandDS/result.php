<?php 
$dbcon=mysqli_connect("localhost","root","","event");
                    // Server,UserId(default root),password(default empty, if set have to give password),databasename
if(!$dbcon){
   die("Error in connecting..".mysqli_connect_error());
}

$eventname=$_POST['eventname'];//method=post in html file is used here
$conductedby=$_POST['conductedby'];
$lastdateforregistration=$_POST['lastdateforregistration'];
$registrationlink=$_POST['registrationlink'];
$eventdate=$_POST['eventdate'];
$todate=$_POST['todate'];
$department=$_POST['department'];


$query="INSERT INTO eventdetail VALUES('$eventname','$conductedby','$lastdateforregistration','$registrationlink','$eventdate','$department',,'$todate',$eventdescription')";
if (mysqli_query($dbcon,$query)){
     include 'redirect.php';
}
else
{
    echo "Error".mysqli_error($dbcon);
}
?>
