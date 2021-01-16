<?php
    if(isset($_POST["title"], $_POST["minister"], $_POST["teachDate"], $_POST["teachDay"])){
        require_once '../controller/database.php';
        require_once '../models/Database.php';
        require_once '../models/Admin.php';
        session_start();
        $output ='';
        $title=$_POST["title"];
        $minister=$_POST["minister"];
        $teachDate=$_POST["teachDate"];
        $teachDay=$_POST["teachDay"];
        $audioFile=$_FILES[0]["name"];
        $adminID=$_SESSION['sessionId'];
        
        

        // adminEvents Data
        $adminTeachingsData= [
            "adminID"=> $adminID,
            "title"=> $title,
            "minister"=> $minister,
            "teachDate"=> $teachDate,
            "teachDay"=> $teachDay,
            "audioFile"=> $audioFile
        ];

        // Instantiate admin
        $admin= new Admin();

        

        //adding to adminEvents
        if($admin->addPreviewTeachings($adminTeachingsData)){
            
            
        }else{
            echo '<script>alert("Unable to add Events Preview table")</script>';
            echo '<script>window.location.href = "../admin/adminAddTeachings.php";</script>';
       
            exit(); 
        }
        
        
    }
    



?>