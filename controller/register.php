<?php
if(isset($_POST['submit'])){
    //Add Database connection
    require_once '../controller/database.php';
    require_once '../models/Admin.php';
    require_once '../models/Database.php';

    //Instantiate admin
    $admin= new Admin();

    $fname= $_POST['fname'];
    $lname= $_POST['lname'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $confirmPass=$_POST['confirmPassword'];

    //admin Data
    $adminData =[
        'fname'=> $fname,
        'lname'=> $lname,
        'username'=> $username,
        'password'=> $password
    ];

    echo 'passed here 1';
    

    //if fields are empty
    if (empty($fname) ||empty($lname) || empty($username) || empty($password) || empty($confirmPass)){
        echo '<script>alert("Some fields are empty")</script>';
        echo 'passed here2';
        // echo '<script>window.location.href = "../admin/adminSignUp.php";</script>';
        // exit();
    }elseif(!preg_match("/^[A-Za-z_]{3,}@[A-Za-z]{3,}[.]{1}[A-Za-z]{2,6}$/",$username)){
        echo '<script>alert("Invalid username")</script>';
        echo 'passed here3';
        // echo '<script>window.location.href = "../admin/adminSignUp.php";</script>';
        // exit();
    }elseif($password !== $confirmPass){
        echo '<script>alert("Passwords do not match")</script>';
        echo 'passed here4';
        // echo '<script>window.location.href = "../admin/adminSignUp.php";</script>';
        // exit();
    }else{
        //admin Email
        $adminEmail=[
            'username'=>$username
        ];
        if($admin->getAdminUsername($adminEmail)){
            echo '<script>alert("Username Taken")</script>';
            echo 'passed here5';
            // echo '<script>window.location.href = "../admin/adminSignUp.php";</script>';
            // exit();
        }
        else{
            
            $hashedPass= password_hash($password, PASSWORD_DEFAULT);

            //admin Data
            $adminData =[
                'fname'=> $fname,
                'lname'=> $lname,
                'username'=> $username,
                'password'=> $hashedPass
            ];
            
            //Add admin To Do
            if($admin->addAdmin($adminData)){
                echo '<script>alert("Well Done. You have been registered successfully")</script>';
                echo 'passed here6';
                // echo '<script>window.location.href = "../admin/adminSignIn.php";</script>';
                // exit();

            }
            else{
                // header("Location: ../admin/adminSignUp.php?error=sqlerror1");
                // exit();
            }
        }
        
    }
    
}
else{
    echo 'wait...';
}
?>