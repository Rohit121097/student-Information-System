<!DOCTYPE HTML>
<html lang="en_US">
    <head>
        <meta charset="UTF-8">
        <title> Student Management System</title>
        <link rel="stylesheet" href="a.css" type=""text/css>
    </head>
    <body bgcolor="#EDCDC2">
	<div class="admintitle">
        <h1 align="center">Welcome to Student Management System</h1>
		</div>
		<h4 align="right" style="margin-right:20px; font-size:20px;"><a href="login.php">Admin Login</a></h4>
        <form method="post" action="index.php">
        <table style="width:30%; font-weight:bold; font-size:20px; margin-top:5px;" align="center" border="8" >
  <style>
table {
  border-collapse: collapse;
  width: 100%;
  margin-top:60px;
}

th, td {
  text-align: center;
  padding: 8px;
}
tr:nth-child(even) {background-color: #f2f2f2;}
.admintitle
{
    
    background-color:#672E3B;
    color:#fff;
    height:140px;
    line-height: 140px;
    font-size: 25px;
	margin-top:20px;
}

</style>
            <tr>
                <td colspan="2" align="center">Student Information</td>
            </tr>
            <tr>
                <td align="left">Choose Standard</td>
                <td>
                    <select name="std" required>
                         <option value="1">1st</option>
                         <option value="2">2st</option>
                         <option value="3">3rd</option>
                         <option value="4">4th</option>
                         <option value="5">5th</option>
                         <option value="6">6th</option>
                         <option value="7">7th</option>
                         <option value="8">8th</option>
                         <option value="9">9th</option>
                         <option value="10">10th</option>
                         <option value="11">11th</option>
                         <option value="12">12th</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td align="left">Enter Roll No</td>
                <td><input type="text" name="rollno" required></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" value="Show Info"></td>
            
            </tr>
        
        </table>
            
        </form>    
    </body>
</html>

<?php
  if(isset($_POST['submit']))
{
   
  $standerd= $_POST['std'];
  $rollno= $_POST['rollno'];
    
  include('dbcon.php');
  include('function.php');
    
  showdetails($standerd,$rollno);
    
}
?>
            
        