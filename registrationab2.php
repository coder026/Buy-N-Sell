<?php

session_start();

#header location for redirecting
header('location:sellerab.html');
	


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
//alert("connection successful");
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
$q="select * from seller where username='$name' && shopname='$shopname' && contact='$contact'&& 
email='$email' && password='$password' ";

$result=mysqli_query($conn,$q);

$num=mysqli_num_rows($result);

if($num==1)
{
	echo "a duplicate data";
}
else{


  $insertquery="insert into seller(username,shopname,contact,email,password) values('$name','$shopname','$contact','$email',
  '$password')";

  $res=mysqli_query($conn,$insertquery);
if ($res) {
?>
<script>//alert("data inserted properly");</script>
<?php
}

else{
  ?>
  <script>//alert("data not inserted ");</script>
  <?php
}

}




?>






