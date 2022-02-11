<?php


    include "../DatabasePackage/DatabaseConnector.php";
    include "../repository/UserInterface.php";
    include "../modelet/User.php";




    class UserQueryOperation implements UserInterface{


        private $databaseInstance;
        private $connection;


        public function __construct()
        {
            $this->databaseInstance = DatabaseConnector::merrInstancen();
            $this->connection = $this->databaseInstance->merrConnection();
        }

        public function insertNeDatabaze(User $user){

           $statment =  $this->connection->prepare("Insert into user(emri,mbiemri,email,password,gjinia) Values(?,?,?,?,?)");

            $emri = $user->getEmri();
            $mbiemri = $user->getMbiemri();
            $email = $user->getEmail();
            $password = md5($user->getPassword());
            $gjinia = $user->getGjinia();

           $statment->bind_param("sssss",$emri,$mbiemri,$email,$password,$gjinia);
            echo $user->getEmri();
           $statment->execute();

        }

        public function findByUsernameAndPassword($username,$password) : User{

        
            $password = md5($password);

             $sql = "SELECT * from user where Email ='$username' and Password = '$password'";

            $result = $this->connection->query($sql);

            $userId = null;
            $emri = null;
            $mbiemri = null;
            $email= null;
            $password= null;
            $gjinia= null;

            if (mysqli_num_rows($result) ==0){
                   header("Location: http://localhost/projekti1/login.html");
               
            }else{
            while ($object = mysqli_fetch_assoc($result)) {
                $userId = $object['UserID'];
                $emri = $object['Emri'];
                $mbiemri = $object['Mbiemri'];
                $email = $object['Email'];
                $password = $object['Password'];
                $gjinia = $object['Gjinia'];

        }

    }

        $user = new User($emri,$mbiemri,$email,$password,$gjinia);


        return $user;

    }


            
        
        public function fshijNeBazeID($id){



        }




    }







?>
