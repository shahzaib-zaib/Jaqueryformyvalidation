<?php

    $con = mysqli_connect("localhost", "root", "", "registrationform");
    
   if(isset($_GET['submit'])){
       $a = $_GET['username'];
       $b = $_GET['useremail'];
       $c = $_GET['pswd'];
       $d = $_GET['userage'];
       $e = $_GET['userdate'];
       $f = $_GET['gender[]'];
       $g = $_GET['websiteurl'];


       $insert_query = "INSERT INTO registerationtable (Name,Email,Password,Age,DateofBirth,Gender,WebsiteUrl)
       VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g')";

       $sqli = mysqli_query($con, $insert_query);

       if($sqli == true){
            echo "<script>
            alert('Data Inserted Successfully');
            window.location.href = 'form.html';
            </script>";
       }else{
        echo "<script>
        alert('Query Faild');
        </script>";
       }

   }
?>