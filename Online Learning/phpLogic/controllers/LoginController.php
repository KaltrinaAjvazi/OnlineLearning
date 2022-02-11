<?php


  include '../repository/UserRepository.php';

  session_start();
    
    class LoginController{



            public function checkUser() : void{

              $objekt = new UserRepository();

              $email = $_POST['Email'];
              $password = $_POST['Password'];

              $user =  $objekt->findByUsernameAndPassword($email,$password);


            
              echo $user->getEmri();
              
              $_SESSION['Emri'] = $user->getEmri();

              header('Location: http://localhost/projekti1/Index.php');
            
              

              
              

            }



    }

    $objekt = new LoginController();

    $objekt->checkUser();

    $_SESSION['BABA'] = "TEST";

      

?>
