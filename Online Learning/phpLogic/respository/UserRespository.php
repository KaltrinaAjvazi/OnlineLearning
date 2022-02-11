

<?php

include "../repository/UserQueryOperation.php";

class UserRepository {


    private $userQueryOperation;

   
    public function __construct()
    {
        $this->userQueryOperation = new UserQueryOperation();
    }


    public function shtoNeDatabaze(User $user){

        $this->userQueryOperation->insertNeDatabaze($user);

    }

    public function findByUsernameAndPassword($username,$password) : User {

      return $this->userQueryOperation->findByUsernameAndPassword($username,$password);
    

    }


        
    public function fshijNeBazeID($id){

            
    }
    

    



}






?>