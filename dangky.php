<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php session_start();?>
<?php
$tam=0;
$tam1=0;
$row=0;
$a=$_POST["tendangnhap"];
$b=$_POST["matkhau"];
$c=$_POST["Email"];
$d=$_POST["tngay"];
$e=$_POST["tthang"];
$f=$_POST["tnam"];
$h=$_POST["sex"];
$e1=$_POST["xacnhanmatkhau"];
$x=[];
$y=[];
$z=[];
$x=$e1;
$y=$b;
$z=$c;


if(preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$c)){
$con=mysqli_connect('localhost','root','','accont');
	$sqlii="SELECT*FROM accont1 WHERE EMAIL='$c'";
	$result=mysqli_query($con,$sqlii);
	$row=mysqli_num_rows($result);
	if($row!=0){ 
		header("location:index.php");
		$_SESSION["mailerro"]="";
		
	}
	$tam1=1;
}
else {header("location:index.php");
	$_SESSION["mailerro"]="Email không hợp lệ";
	$tam1=0;
	}




if(strlen($x)!=strlen($y))
{ 
	header("location:index.php");
	$_SESSION["register"]="Mật khẩu không trùng";

}
else
  if(strlen($x)==strlen($y)){
	for($i=0;$i<strlen($b);$i++)
	{
		if($x[$i]!=$y[$i]){$tam=0;break;}
		else{$tam=1;}
	}
	if($tam==0){header("location:index.php");
		$_SESSION["register"]="Mật khẩu không trùng";}
	else if($tam==1&$tam1==1&$row==0){
		$conc=mysqli_connect("localhost","root","","accont");
		if(!$conc)
		{
			die("Connect is fail:".mysqli_connect_error());
		}
		$sql="INSERT INTO accont1(username,password,email,ngay,thang,nam,gioitinh) VALUES('$a','$b','$c','$d','$e','$f','$h')";
		if(mysqli_query($conc,$sql))
		{
			$message = 'Đăng kí thành công';
			echo "<SCRIPT type='text/javascript'>
				alert('$message');
				window.location.replace(\"index.php\");
				</SCRIPT>";
			
		}
		else
		{
		echo "Error: " . $sql . "<br>" . mysqli_error($conc);

		}
}
}
?>