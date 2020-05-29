<?php
include ("connection.php");
error_reporting(0);

$mysqli = new Mysqli($servername, $username,$password,$dbname);
try{


    if(isset($_POST['submit'])){

        $id = $_POST [ 'id'];
        $name = $_POST [ 'name'];
        $phone = $_POST [ 'phone'];
        $email = $_POST [ 'email'];
        $g_no = $_POST [ 'g_no'];
        $c_in = $_POST [ 'c_in'];
        $c_out = $_POST [ 'c_out'];
        $r_type = $_POST [ 'r_type'];
        $r_num = $_POST [ 'r_num'];
      

        $register_query="INSERT INTO `room_details`(`id`, `name`, `phone`, `email`, `g_no`, `c_in`, `c_out`, `r_type`, `r_num`) VALUES ('$id','$name','$phone','$email','$g_no','$c_in','$c_out','$r_type','$r_num')";
    
    $stmt= $mysqli->prepare($register_query);
    $stmt->bind_param("isisisssi",$id,$name,$phone,$email,$g_no,$c_in,$c_out,$r_type,$r_num);
    $stmt->execute();
    $stmt->close();
    $con->close();
    if($stmt == 1){
        echo "<script>alert('RECORD SUBMITTED !')</script>";
        ?>
        <META HTTP-EQUIV="Refresh" CONTENT="0; URL=success.php">
        <?php 
    }
        }
    
    }
catch(Exception $ex)
    {
        echo("error".$ex->getMessage());
    }


?>

