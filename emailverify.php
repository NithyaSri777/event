<!-- <?php 
$name = $_POST['name'];
$username  = $_POST['username'];
$gender = $_POST['gender'];
$department= $_POST['department'];
$password= $_POST['password'];

if (!empty($name) || !empty($username) || !empty($gender) || !empty($department) || !empty($password) )
{

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "events";



// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{

  $SELECT="SELECT count(*) from register where userName = :userName And password= :password";
  if($SELECT)
  {

  }
//   $SELECT = "SELECT username From register Where username = ? Limit 1";
//   $INSERT = "INSERT Into register(name , username ,gender, department, password)values(?,?,?,?,?)";

// //Prepare statement
//      $stmt = $conn->prepare($SELECT);
//      $stmt->bind_param("s", $username);
//      $stmt->execute();
//      $stmt->bind_result($username);
//      $stmt->store_result();
//      $rnum = $stmt->num_rows;

//      //checking username
//       if ($rnum==0) {
//       $stmt->close();
//       $stmt = $conn->prepare($INSERT);
//       $stmt->bind_param("sssss", $name , $username,$gender, $department, $password);
//       $stmt->execute();
//       echo "New record inserted sucessfully";
//      } else {
//       echo "Someone already register using this email";
//      }
//      $stmt->close();
//      $conn->close();
//     }
// } else {
//  echo "All field are required";
//  die();
// }
?> -->

// Create connection
<?php
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
// Check connection
if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
echo "Connection Successful";

$query = "SELECT * FROM register where username = " . $_POST['email'] ;
    $result = mysqli_query($conn, $query) or die ("There was an error:" . mysqli_error($conn));

    if (mysqli_num_rows($result) > 0) {
        header('Location: eventdetails.html');
        exit();
    }
    else{
        header('Location: home.html');
        exit();
    }

    $conn->close();
    ?>