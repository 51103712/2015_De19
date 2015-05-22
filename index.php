
<?php 
	session_start();

?>
<!DOCTYPE html>
<meta charset="UTF-8">
<html lang="vi" >
<head>
<title>Welcome to Video Manager Online</title>
<link href="css/index.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="thu1">
  <div class="thu2"><a href="index.php" target="_self">Đề 19</a></div>
  <div class="thu3" >  
    <table cellspacing="0" role="presentation" >
	<form action="controlindex.php" method="POST">
	<tr>
		<td>Email:</td>
		<td>Password:</td>
		
	</tr>
	<tr  > 
		<td><input type="text" name="textusername"></td>
		<td><input type="password" name="textpassword"></td>
		<td><input type="Submit" style="background-color:green;color:white;border-color:green" value="Đăng nhập" name="sb" id="ssb"></td>
	</tr>
	<tr >
		<td style="color:#333333"><input type="checkbox" name="duytri2" value="duy" checked>Remember me</td>
		<td id="quenmk"><a href="#">Forgot password?</a></td>
	</tr>
		
	</form>
    </table>
	<div class="thu4">   
		<form >
		  
		</form>
	
	</div>
  
  </div>


</div>
<div class="thu5">
<div class="thu10">
  <div class="thu6">Welcome</div>
  <div class="thu7" >
	<div class="thu8">Register</div>
	<form id="dk" action="dangky.php" method="POST">
	   <div class="thu9">
		   
			<input type="text" name="tendangnhap"  style="border-radius: 20px;border: 2px solid #8AC007;height:25px;width:290px" tabindex="1" placeholder="Username" required value="<?php if(isset($_SESSION["tendangnhap"])) { echo $_SESSION["tendangnhap"]; } ?>">
			
	   </div>
	   <div class="thu10">
	      
			<input id="ktemail" type="text" name="Email" style="border-radius: 20px;border: 2px solid #8AC007;height:25px;width:290px" tabindex="1" placeholder="Email" required >
		 
	   </div>
	   <div class="thu11">
	    
			<input id="mk" type="password" name="matkhau" style="border-radius: 20px;border: 2px solid #8AC007;height:25px;width:290px" tabindex="1" placeholder="Password" required >
		
	   </div>
	   <div class="thu111">
		 
			  <input id="xnmk" type="password" name="xacnhanmatkhau" style="border-radius: 20px;border: 2px solid #8AC007;height:25px;width:290px" tabindex="1" placeholder="Retype password" required >
		  
	   </div>
	   <div class="thu12">
			Date of birth
		
	   </div>
	   <div class="thu13">
		
			<input type="text" name="tngay"  style="border-radius: 20px;border: 2px solid #8AC007;height:25px;width:80px" tabindex="1" placeholder="Day" required >
			<input type="text" name="tthang"  style="border-radius: 20px;border: 2px solid #8AC007;height:25px;width:80px" tabindex="1" placeholder="Month" required >
			<input type="text" name="tnam"  style="border-radius: 20px;border: 2px solid #8AC007;height:25px;width:80px" tabindex="1" placeholder="Year" required >
		 
	   </div>
	   <div class="thu14"> 
			
				<input type="radio" name="sex" value="male" >Male
				<input type="radio" name="sex" value="female">Female
			
	   </div>
	   <div class="thu15">   
		
		  <input  type="submit" style="background-color:green;color:white;border-color:green; width:200px;height:50px;font-size:150%;" value="Submit">
		 </div>
		<div class="errologin">
		<?php
			if(isset($_SESSION["loginstatus"])){
				echo "Login fail";
			
			}
			if(isset($_SESSION["register"])){ echo "Please type same password!";}
		     
			 
		
		?>   
		<div>
		<?php
		if(isset($_SESSION["mailerro"])){echo "Invalid Email";}
		session_unset(); 
		session_destroy();
		?>
		</div>
		
		</div>
	</form>
	</div>
	</div>

</div>
</div>
<script>
  var d1=[];
  var d2=[];
  var d3=[];
function kiemtra(){
  var a;
  var e;
  d1=document.getElementById("mk").value;
  d2=document.getElementById("xnmk").value;
 if(d1.length==d2.length)
 {
 
	 for(a=0;a<d1.length;a++)
	 {
		if(d1[a]!=d2[a])
		{
			e=0;
			break;
		}
		else 
		{
			e=1;
		}
	
		
	 }
	 }
 else
 {e=0;}
  var m;
  var m1;
  d3=document.getElementById("ktemail").value;
  for(m=0;m<d3.length;m++)
  {
	if(d3[m]=="@"){m1=1;break;}
	else{m1=0;}
  }
if(m1==0){alert("Invalid Email");}
 else if(e==0){alert("Please type same password!");}
	


}
  
  
</script>

</body>

</html>
