<?php

session_start();
if(isset($_SESSION['uid']))
{
    header('location:admin/admindash.php');
}
?>

<!DOCTYPE HTML>
<html lang="en_US">
    <head>
        <meta charset="UTF-8">
        <title> Admin Login</title>
    </head>
    <body>
	<style>
   .admintitle
{
    
    background-color:#672E3B;
    color:#fff;
    height:140px;
    line-height: 140px;
    font-size: 25px;
	margin-top:20px;
}

table {
	font-size:20px;
  border-collapse: collapse;
  width: 50%;
}

th, td {
  text-align: center;
  padding: 8px;
}
                

tr:nth-child(even) {background-color: #f2f2f2;}
</style>
         <body bgcolor="#EDCDC2">
<div class="admintitle">
        <h1 align="center">Admin Login</h1>
		</div>
        <form action="login.php" method="post">
            
            <table align="center" border="7">
                <tr>
                    <td>Username</td><td><input type="text" name="uname" required></td>
                </tr>
                 <tr>
                    <td>Password</td><td><input type="password" name="pass" required></td>
                </tr>
                <tr><td colspan="2" align="center" style="font-size:42px; font-weight:bold;"><input type="submit" name="login" value="Login"></td>
                </tr>
                <tr>
                    <h1 align="right" style="margin-right:50px; font-size:18px;"><a href="index.php">Back to Home</a></h1>
                </tr>
            </table>
            
        </form>
    </body>

<?php
   include('dbcon.php');
    
    if(isset($_POST['login']))
    {
        $username = $_POST['uname'];
        $password = $_POST['pass'];
        
        $qry="SELECT * FROM admin WHERE username='$username' AND password='$password'";
		
        $run=mysqli_query($con,$qry);
        $row=mysqli_num_rows($run);
        if($row <1)
        {
 ?>
            <script>
                alert('username or password not match !!');
                window.open('login.php','_self');
            </script>
<?php
        }
        else
        {
            $data=mysqli_fetch_assoc($run);
            
            $id=$data['id'];
            
            
            
            
            $_SESSION['uid']=$id;
            header('location:admin/admindash.php');
            
        
        }
    }
?>