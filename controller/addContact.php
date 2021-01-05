<?php
    if (isset($_POST['submit'])){
        require_once 'database.php';
        require_once '../models/Contact.php';
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $category=$_POST['category'];
        $message=$_POST['message'];
        $catId1=1;
        $catId2=2;
        $catId3=3;
        $catId4=4;
    }

    // if all the fields are empty return an error
    if(empty($fname)||empty($lname)||empty($email)||empty($category)||empty($message)){
        
        // header("Location: sell_welcome.php?error=emptyfields");
        $message1="Pls some fields are empty. Do well to fill all of them";
        echo "<SCRIPT> 
            alert('$message1')
            window.location.replace('../view/contact_us_new.php');
        </SCRIPT>";
        exit();
    }
?>