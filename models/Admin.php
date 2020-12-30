<?php
    class Admin{
        private $db;

        public function __construct(){
            $this->db = new Database;

        }

        //adds Admin
        public function addAdmin($data){
            //Prepare Query
            $this->db->query('insert into Admin(fname, lname, username, password) values(:fname, :lname, :username, :password)');

            // Bind Values
            $this->db->bind(':fname', $data['fname']);
            $this->db->bind(':lname', $data['lname']);
            $this->db->bind(':username', $data['username']);
            $this->db->bind(':password', $data['password']);

            //Execute
            if($this->db->execute()){
                return true;
            }else{
                return false;
            }
        }

        //gets the Admin Username
        public function getAdminUsername($data){
            //Prepare Query
            $this->db->query('select username from Admin where username = :username');

            // Bind Values
            $this->db->bind(':username', $data['username']);
           

            //Execute
            $this->db->execute();
            

            //Fetch One record
            $numRows=$this->db->rowCount();
            if($numRows>0){
                return true;
            }
            else{
                return false;
            }
            
        }

        //gets the Admin details
        public function getAdminDetails($data){
            //Prepare Query
            $this->db->query('select * from Admin where username = :username');

            // Bind Values
            $this->db->bind(':username', $data['username']);
           

            //Execute
            $this->db->execute();
            

            //Fetch One record
            $results=$this->db->single();
            return $results;
            
        }

        public function addPreviewEvents($data){
            //Prepare Query
            $this->db->query('insert into adminEvents(title, description, startTime, endTime, picture) values(:title, :description, :fDate, :tDate, :image)');

            // Bind Values
            $this->db->bind(':title', $data['title']);
            $this->db->bind(':description', $data['description']);
            $this->db->bind(':fDate', $data['fDate']);
            $this->db->bind(':tDate', $data['tDate']);
            $this->db->bind(':image', $data['image']);

            //Execute
            if($this->db->execute()){
                return true;
            }else{
                return false;
            }
        }
        
    }
?>