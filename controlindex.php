<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
session_start();
?>
<?php 

$user=$_POST["textusername"];
$pass=$_POST["textpassword"];
$connect = mysqli_connect('localhost:6666','root','','accont');
 
if(mysqli_connect_errno()!==0)
{
    die("Error: Could not connect to the database. An error: ".mysqli_connect_error()." ocurred.");
}
mysqli_set_charset($connect,'utf8');
$query = "SELECT * FROM accont1 WHERE EMAIL='$user' AND PASSWORD='$pass'";
$results = mysqli_query($connect,$query);
$a=mysqli_num_rows($results);
if($a==0)
{
header("Location:index.php");
$_SESSION["loginstatus"]="Incorect username or password. Please try again";

}
else{
while( ($rows = mysqli_fetch_array($results))!= NULL )
{
    echo "<script>alert('Login success'); </script>";
	header("Location:home.php");
}
}
?>