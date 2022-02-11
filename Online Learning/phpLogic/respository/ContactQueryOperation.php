<?php


    
    include "../repository/ContactInterface.php";
    include "../modelet/Contact.php";
    include_once "../DatabasePackage/DatabaseConnector.php";




    class UserQueryOperation implements ContactInterface{


        private $databaseInstance;
        private $connection;


        public function __construct()
        {
            $this->databaseInstance = DatabaseConnector::merrInstancen();
            $this->connection = $this->databaseInstance->merrConnection();
        }

        public function insertNeDatabaze(Contact $contact){

           $statment =  $this->connection->prepare("Insert into contact(emri,email,subjekti,mesazhi) Values(?,?,?,?)");

            $emri = $contact->getEmri();
            $email = $contact->getEmail();
            $subjekti = $contact->getSubjekti();
            $mesazhi = $contact->getMesazhi();

           $statment->bind_param("ssss",$emri,$email,$subjekti,$mesazhi);
           
           $statment->execute();

        }

       

            
        
        public function fshijNeBazeID($id){



        }




    }







?>