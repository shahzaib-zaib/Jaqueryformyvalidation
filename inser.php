<?php

    $con = mysqli_connect("localhost", "root", "", "registrationform");
    
   if(isset($_GET['submit'])){
       $a = $_GET['username'];
       $b = $_GET['useremail'];
       $c = $_GET['pswd'];
       $d = $_GET['websiteurl'];
       $e = $_GET['userage'];
       $f = $_GET['userdate'];
       $g = $_GET['gender[]'];


   }
?>