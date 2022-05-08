<?php 

$host="localhost";
$user="root";
$password="";
$db="honeybadger";

mysql_connect($host,$user,$password);
mysql_select_db($db);

if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from loginform where user='".$uname."'AND Pass='".$password."' limit 1";
    
    $result=mysql_query($sql);
    
    if(mysql_num_rows($result)==1){
        echo "Succesfully logged in";
        header('Location: http://127.0.0.1:5500/calender.htm');
    }
    else{
        echo "Password incorrect";
		header('Location: http://127.0.0.1:5500/calender.htm');
    }
       
}




?>

<!DOCTYPE html>
<html>
<head>
	<title> Login </title>
	<link rel="stylesheet" a href="2page.css">
</head>
<body>
	<div class="container">
	<img src="/"/>
		<form method= "POST" action="#">
			<div class="form-input">
				<input type="text" name="text" placeholder="Enter User Name"/>	
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="Enter password"/>
			</div>
			<input type="submit" type="submit" value="LOGIN" class="btn-login"/>
		</form>
	</div>
</body>
</html>
<!DOCTYPE html>