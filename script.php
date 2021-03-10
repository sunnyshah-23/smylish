<?php
      //connection
      $servername="localhost";
      $username="root";
      $password="";
      $database="test";
    
    // if($_SERVER['REQUEST_METHOD']=="POST"){
 if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        if(empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["phone"])){
            echo '<script>alert("Kindly Fill all the details")</script>'; 
        }
        else{
            $conn=mysqli_connect($servername,$username,$password,$database);
            if(!$conn){
                die("sorry failed to connect".mysqli_connect_error());
        
            }
             else{
                    
                    $sql="INSERT INTO `booknow` (`name`,`email`,`phone`) VALUES ('$name','$email','$phone')";
                    $result=mysqli_query($conn,$sql);
        
                    if($result){
                        echo "record inserted";
                        header("Location:index.php");
                    }
                    else{
                        echo "record not inserted";
                        mysqli_error($conn);
                    }
                }
        }
     

   
    }
    ?>