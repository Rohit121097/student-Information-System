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
   include('../dbcon.php');

   $sid= $_GET['sid'];
   
   $sql="SELECT * FROM student WHERE `id`='$sid'";
   $run= mysqli_query($con,$sql);

   $data=mysqli_fetch_assoc($run);



?>
<h4><a href="admindash.php" style="float:left; margin-right:30px; font-size:20px;">Back to Dashboard</a></h4>
<h4><a href="logout.php" style="float:right; margin-right:30px;font-size:25px;  ">Logout</a></h4>

<form method="post" action="updatedata.php" enctype="multipart/form-data">
    <table align="center" border="1" style="width:70%; margin-top:40px;" >
        <tr>
            <th>Roll No</th>
            <td><input type="text" name="rollno" value=<?php echo $data['rollno']; ?> required></td>
        </tr>
         <tr>
            <th>Full Name</th>
            <td><input type="text" name="name" value=<?php echo $data['name']; ?> required></td>
        </tr>
         <tr>
            <th>City</th>
            <td><input type="text" name="city" value=<?php echo $data['city']; ?> required></td>
        </tr>
         <tr>
            <th>Parent Contact Number</th>
            <td><input type="number" name="pcon" value=<?php echo $data['pcont']; ?> required></td>
        </tr>
        <tr>
            <th>Standard</th>
            <td><input type="number" name="std" value=<?php echo $data['standerd']; ?> required></td>
        </tr>
        <tr>
            <th>Image</th>
            <td><input type="file" name="image" required></td>
        </tr>
        <tr>
            
            <input type="hidden" name="sid" value="<?php echo $data['id']; ?>" />
            <td colspan="2" align="center"><input type="submit" name="submit" value="Submit"></td>
        </tr>
    </table>
</form>
