<?php
    if(isset($_POST["title"], $_POST["description"], $_POST["fDate"], $_POST["tDate"], $_POST["image"],)){
        require_once '../controller/database.php';
        require_once '../models/Database.php';
        require_once '../models/Admin.php';
        session_start();
        $output ='';
        $title=$_POST["title"];
        $description=$_POST["description"];
        $fDate=$_POST["fDate"];
        $tDate=$_POST["tDate"];
        $image=$_POST["image"];
        $adminID=$_SESSION['sessionId'];
        
        

        // adminEvents Data
        $adminEventsData= [
            "adminId"=> $adminID,
            "title"=> $title,
            "description"=> $description,
            "fDate"=> $fDate,
            "tDate"=> $tDate,
            "image"=> $image
        ];

        // Instantiate admin
        $admin= new Admin();

        $imageName=$_FILES[$image]['name'];

        //adding to adminEvents
        if($admin->addPreviewEvents($adminEventsData)){
            $output.= '
                <div class="col-sm-6">
                <div>
                    <img  src="../assets/'.$imageName.'" class="img-thumbnail">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="content1">
                    <h3>'.$title.'</h3>
                    <p>'.$description.'</p>
                    ';
            if($fDate==$tDate){
                $output.='
                <p>Date: '.$fDate.'</p>
                ';
            }else{
                $output.='
                <p>Date: '.$fDate.'to '.$tDate.'</p>
                ';
            }
            $output.='
                    <hr>
                    
                </div>
            </div>
            ';
        }else{
            echo '<script>alert("Unable to add Events Preview table")</script>';
            echo '<script>window.location.href = "../admin/adminAddEvents.php";</script>';
       
            exit(); 
        }
        
        echo $output;
    }
    



?>