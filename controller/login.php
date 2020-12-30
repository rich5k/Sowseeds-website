<?php

if(isset($_POST['submit'])){
    require '../controller/database.php';
    require_once '../models/Admin.php';
    require_once '../models/Database.php';

    $username= $_POST['username'];
    $password=$_POST['password'];

    // Instantiate admin
    $admin= new Admin();

    //if fields are empty
    if(empty($username)||empty($password)){
        echo '<script>alert("Empty Fields")</script>';
        echo '<script>window.location.href = "../admin/adminSignIn.php";</script>';
       
        exit();
    }
    else{
        //admin username
        $adminUsername=[
            'username'=>$username
        ];
        if(!($admin->getAdminUsername($adminUsername))){
            echo '<script>alert("No user")</script>';
            echo '<script>window.location.href = "../admin/adminSignUp.php";</script>';
            
            exit();
        }
        else{
            //getting admin details
            $admin1= $admin->getAdminDetails($adminUsername);
            
            //verfiying password
            $passCheck=password_verify($password, $admin1->password);
            echo $passCheck;
            if($passCheck==false){
                echo '<script>alert("Wrong Password")</script>';
                echo '<script>window.location.href = "../admin/adminSignIn.php";</script>';
                
                exit();
            }elseif($passCheck==true){
                session_start();
                //creating session variables
                $_SESSION['sessionId']=$admin1->adminID;
                $_SESSION['sessionUsername']=$admin1->username;
                $_SESSION['sessionFname']=$admin1->fname;
                $_SESSION['sessionLname']=$admin1->lname;
                echo '<script>alert("Well Done. Logged in successfully")</script>';
                echo '<script>window.location.href = "../admin/adminIndex.php";</script>';
                
            }else{
                echo '<script>alert("Wrong Password")</script>';
                echo '<script>window.location.href = "../admin/adminSignIn.php";</script>';
              
            }
            
        }
    }
    
    
}else{

    header("Location: ../admin/adminSignIn.php?error=accessforbidden");
    exit();
}
?>