<?php
session_start();
            
            if(isset($_SESSION['uid']))
            {
                echo "";
            }
            else
            {
                header('location: ../login.php');
            }

?>
<?php
   include('header.php');
   include('titlehead.php');
?>
<h4><a href="admindash.php" style="float:left; margin-right:30px; font-size:25px;">Back to Dashboard</a></h4>
<h4><a href="logout.php" style="float:right; margin-right:30px;font-size:25px;  ">Logout</a></h4>
<form method="post" action="addstudent.php" enctype="multipart/form-data">
    <table align="center" border="6" style="width:70%; margin-top:40px;" >
        <tr>
            <th>Roll No</th>
            <td><input type="text" name="rollno" placeholder="Enter Roll No" required></td>
        </tr>
         <tr>
            <th>Full Name</th>
            <td><input type="text" name="name" placeholder="Enter Your Full Name" required></td>
        </tr>
         <tr>
            <th>City</th>
            <td><input type="text" name="city" placeholder="Enter Your City" required></td>
        </tr>
         <tr>
            <th>Parent Contact Number</th>
            <td><input type="number" name="pcon" placeholder="Enter Your Parents No" required></td>
        </tr>
        <tr>
            <th>Standard</th>
            <td><input type="number" name="std" placeholder="Enter Standard" required></td>
        </tr>
        <tr>
            <th>Image</th>
            <td><input type="file" name="image" required></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" name="submit" value="Submit"></td>
        </tr>
    </table>
</form>

<?php

if(isset($_POST['submit']))
{
    
    include('../dbcon.php');
    $rolno= $_POST['rollno'];
    $name= $_POST['name'];
    $city= $_POST['city'];
    $pcon= $_POST['pcon'];
    $std= $_POST['std'];
    $imagename= $_FILES['image']['name'];
    $tempname= $_FILES['image']['tmp_name'];
    
    move_uploaded_file($tempname,"../dataimg/$imagename");
    
    
    $qry="INSERT INTO student ( `rollno`, `name`, `city`, `pcont`, `standerd`,`image`) VALUES ('$rolno','$name','$city','$pcon','$std','$imagename')";
    
    $run=mysqli_query($con,$qry);
    
    if($run == true)
    {
        ?>
 
       <script>
           alert('Data Inserted Successfully');
           
           
      </script>
        <?php
        
    }
    
}
?>
