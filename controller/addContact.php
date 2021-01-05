<?php
    if (isset($_POST['submit'])){
        require_once 'database.php';
        require_once '../models/Contact.php';
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $category=$_POST['category'];
        $message=$_POST['message'];
        
    }

    $contact= new Contact();
    // if all the fields are empty return an error
    if(empty($fname)||empty($lname)||empty($email)||empty($category)||empty($message)){
        
        // header("Location: sell_welcome.php?error=emptyfields");
        $message1="Pls some fields are empty. Do well to fill all of them";
        echo "<SCRIPT> 
            alert('$message1')
            window.location.replace('../contact_us_new.php');
        </SCRIPT>";
        exit();
    }else{
        if($category=='comment'){
            $contactData=[
                'fname'=> $fname,
                'lname'=> $lname,
                'email'=> $email,
                'messageType'=> 'comment',
                'contactMessage'=> $message
            ];

            if($contact->addContact($contactData)){
                $message2="Message sent. Thank you for reaching out to us :)";
                echo "<SCRIPT> 
                    alert('$message2')
                    window.location.replace('../index.html');
                </SCRIPT>";
                exit();
            }
            
        }
        if($category=='question'){
            $contactData=[
                'fname'=> $fname,
                'lname'=> $lname,
                'email'=> $email,
                'messageType'=> 'question',
                'contactMessage'=> $message
            ];

            if($contact->addContact($contactData)){
                $message2="Message sent. Thank you for reaching out to us :)";
                echo "<SCRIPT> 
                    alert('$message2')
                    window.location.replace('../index.html');
                </SCRIPT>";
                exit();
            }
            else{
                echo 'sqlerror2';
            }
        }
        if($category=='problem'){
            $contactData=[
                'fname'=> $fname,
                'lname'=> $lname,
                'email'=> $email,
                'messageType'=> 'problem',
                'contactMessage'=> $message
            ];

            if($contact->addContact($contactData)){
                $message2="Message sent. Thank you for reaching out to us :)";
                echo "<SCRIPT> 
                    alert('$message2')
                    window.location.replace('../index.html');
                </SCRIPT>";
                exit();
            }
            else{
                echo 'sqlerror3';
            }
        }
        if($category=='none'){
            $contactData=[
                'fname'=> $fname,
                'lname'=> $lname,
                'email'=> $email,
                'messageType'=> 'none',
                'contactMessage'=> $message
            ];

            if($contact->addContact($contactData)){
                $message2="Message sent. Thank you for reaching out to us :)";
                echo "<SCRIPT> 
                    alert('$message2')
                    window.location.replace('../index.html');
                </SCRIPT>";
                exit();
            }
            else{
                echo 'sqlerror4';
            }
        }
    }
?>