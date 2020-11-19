<?php  if(isset($_POST['submit']))

    
    include('../dbcon.php');
    $rolno= $_POST['rollno'];
    $name= $_POST['name'];
    $city= $_POST['city'];
    $pcon= $_POST['pcon'];
    $std= $_POST['std'];
    $id= $_POST['sid'];
    $imagename= $_FILES['image']['name'];
    $tempname= $_FILES['image']['tmp_name'];
    
    move_uploaded_file($tempname,"../dataimg/$imagename");
    
    
    $qry="UPDATE student SET `rollno` = '$rolno', `name` = '$name', `city` = '$city', `pcont` = '$pcon', `standerd` = '$std', `image` = '$imagename' WHERE `id` = $id;";
    
    $run=mysqli_query($con,$qry);
    
    if($run == true)
    {
        ?>
 
       <script>
           alert('Data Updated Successfully');
           window.open('updateform.php?sid=<?php echo $id; ?>','_self');
           
           
      </script>
        <?php
        
    }
    
?>