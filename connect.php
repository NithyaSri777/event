<?php
session_start();
?><html>
<head>
<style type="text/css">
 input{
 border:1px solid olive;
 border-radius:5px;
 }
 h1{
  color:darkgreen;
  font-size:22px;
  text-align:center;
 }
</style>
</head>
<body>
<h1>Login<h1>
<form action='' method='post'>
<table cellspacing='5' align='center'>
<tr><td>User name:</td><td><input type='text' name='username'/></td></tr>
<tr><td>Password:</td><td><input type='password' name='password'/></td></tr>
<tr><td></td><td><input type='submit' name='submit' value='Submit'/></td></tr>
</table>

</form>
<?php
if(isset($_POST['submit']))
{
 $connection=mysqli_connect('localhost','twa137','twa137hu','westernhotel137');

 $username=$_POST['username'];
 $password=$_POST['password'];
 if($username!=''&&$password!='')
 {
   $query=mysqli_query($connection,"select * from login where username='".$username."' and password='".$password."'");
   $res=mysqli_num_rows($query);
   if($res>0)
   {
    $_SESSION["username"] = $username;
    header('location:browse.php');
   }
   else
   {
    echo'You entered username or password is incorrect';
   }
 }
 else
 {
  echo'Enter both username and password';
 }
}
?>
</body>
</html>