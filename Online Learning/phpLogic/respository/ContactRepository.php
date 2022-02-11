

<?php

include "../repository/ContactQueryOperation.php";

class ContactRepository {


    private $contactQueryOperation;

   
    public function __construct()
    {
        $this->contactQueryOperation = new UserQueryOperation();
    }


    public function shtoNeDatabaze(Contact $contact){

        $this->contactQueryOperation->insertNeDatabaze($contact);

    }

        
    public function fshijNeBazeID($id){

            
    }
    

    



}






?>