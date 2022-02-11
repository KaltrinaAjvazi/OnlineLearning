<?php


  include '../repository/UserRepository.php';

  
    


    class signUpController{

   

    public function shtoUserinNeDataze(){
        $objekt = new UserRepository();

        $emri = $_POST['firstname'];
        $mbiemri = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $gjinia = $_POST['gender'];


        $objekt->shtoNeDatabaze(new User($emri,$mbiemri,$email,$password,$gjinia));

      header('Location: http://localhost/projekti1/signup.html');
        echo "<script>alert('U regjistruat')</script>";

    }

}
    $objekt = new signUpController();

    $objekt->shtoUserinNeDataze();


    




      

   


    

    



      

?>