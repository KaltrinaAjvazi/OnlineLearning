<?php



class Contact{


    private $emri;
    private $email;
    private $subjekti;
    private $mesazhi;


    public function __construct($emri,$email,$subjekti,$mesazhi){
        $this->emri = $emri;
        $this->email = $email;
        $this->subjekti = $subjekti;
        $this->mesazhi = $mesazhi;
    }

    public function getEmri(){
        return $this->emri;
    }
    public function getEmail(){

        return $this->email;
    }

    public function getSubjekti(){
        return $this->subjekti;
    }
    public function getMesazhi(){

        return $this->mesazhi;
    }

    
}




?>
