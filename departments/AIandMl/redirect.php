<?php 
$dbcon=mysqli_connect("LOCALHOST","root","","event");
                    // Server,UserId(default root),password(default empty, if set have to give password),databasename
if(!$dbcon){
   die("Error in connecting..".mysqli_connect_error());
}

$store= "SELECT * FROM eventdetail where department='AIandML'";

$res=mysqli_query($dbcon,$store);
?>
<!DOCTYPE html> 
<html> 
    <head> 
        <title> Fetch Data From Database </title> 
        <!-- <link href="style.css" rel="stylesheet">
        <style>
            body{
                color:white;
            }
            </style> -->
    </head> 
    <body > 
    <table align="center" border="1px" style="width:1100px; line-height:40px;"> 
    <tr> 
        <th colspan="12"><h2>Event Details</h2></th> 
        </tr> 
              <th> Type of Event </th> 
              <th> Event Name </th> 
              <th> Conducted By </th> 
              <th> Last Date for Registration </th> 
              <th> Registration Link </th> 
              <th> Event Date </th> 
              <th> Department </th> 
              <th> Event Description </th> 
              <!-- <th> Country </th>  -->
              
        </tr> 
        
        <?php while($array=mysqli_fetch_row($res)) 
        { 
        ?> 
        <tr> <td><?php echo $array[0]; ?></td> 
        <td><?php echo $array[1]; ?></td> 
        <td><?php echo $array[2]; ?></td> 
        <td><?php echo $array[3]; ?></td> 
        <td><?php echo $array[4]; ?></td> 
        <td><?php echo $array[5]; ?></td> 
        <td><?php echo $array[6]; ?></td> 
        
        </tr> 
    <?php 
               } 
          ?>
 