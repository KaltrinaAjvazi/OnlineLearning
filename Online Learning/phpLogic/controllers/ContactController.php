<?php



  include '../repository/ContactRepository.php';
  
    


    class ContactController{

   

    public function shtoContactnNeDataze(){
        $objekt = new ContactRepository();

        $emri = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
   


        $objekt->shtoNeDatabaze(new Contact($emri,$email,$subject,$message));

      header('Location: http://localhost/projekti1/contact-us.php');
        echo "<script>alert('U regjistruat')</script>";

    }

}
    $objekt = new ContactController();

    $objekt->shtoContactnNeDataze();


    




      

   


    

    



      

?>
