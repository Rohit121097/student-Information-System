<?php
session_start();
            
            if(isset($_SESSION['uid']))
            {
                echo "";
            }
            else
            {
                header('location:../login.php');
            }

?>
<?php
   include('header.php');
?>
<html>
    <head></head>
    <style>
        .admintitle
{
    margin-top:52px;
    background-color:#615550;
    color:#fff;
    height:165px;
    line-height:140px;
    font-size: 25px;
}
        .dashboard
{   
    background-color:#9E1030;
	height:265px;
    line-height: 60px;
   
    
}
body{
      background-color:#E94B3C;
  }
.t1{
            
     font-size: 25px;
   }

 </style>
    <h4 align="right" style="margin-right:50px; font-size:20px;"><a href="logout.php" >Logout</a></h4>
<div class="admintitle">
<h1 align="center">Welcome to Admin Dashboard</h1>
    
</div>
    
    <div class="dashboard" style="background-color: teal;" "width:50%;" "text-size:25px;" align="center" >
        <table class="t1">
            <tr>
                <td>1</td><td><a href="addstudent.php">Add Student Details</a></td>
            </tr>
            <tr>
                <td>2</td><td><a href="updatestudent.php">Update Student Details</a></td>
            </tr>
            <tr>
                <td>3</td><td><a href="deletestudent.php">Delete Student Details</a></td>
            </tr>
        </table>
    </div> 
    <body bgcolor="silver">
    </body>
</html>
        
    