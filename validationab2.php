<?php

session_start();

$username="root";
$password="";
$server="localhost";
$database="project";

$conn=mysqli_connect($server,$username,$password,$database);

#//$conn=mysqli_connect($server,$username,$password);
//$db=mysqli_select_db($conn,$database);



if($conn)
{
	//echo"connection successful";

?>
<script>
//salert('connection successful');
 </script>

<?php
}
else{
	//echo"no connection";
die("no connection".mysqli_connect_error());

}
?>

<?php


   mysqli_select_db($conn,'project');
   
    $name=$_POST['username'];
    $shopname=$_POST['shopname'];
     $contact=$_POST['contact'];
 $email=$_POST['email'];
  $password=$_POST['password'];
$q="select * from seller where 
username ='$name' && password='$password' ";

$result=mysqli_query($conn,$q);

$num=mysqli_num_rows($result);

if($num==1)
{
$_SESSION['username']=$name;
$_SESSION['password']=$password;

header('location:welcome.php');


}
else{

/*?>
<script>
alert("invalid username or password");
 </script>

<?php */

header('location:sellerab.html');


}

?>
  




