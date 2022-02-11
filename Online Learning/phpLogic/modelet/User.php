


<?php


class User{


    private $emri;
    private $mbiemri;
    private $email;
    private $password;
    private $gjinia;


    public function __construct($emri,$mbiemri,$email,$password,$gjinia)
    {
        $this->emri = $emri;
        $this->mbiemri = $mbiemri;
        $this->email = $email;
        $this->password = $password;
        $this->gjinia = $gjinia;
    }



   
    public function getEmri(){
        return $this->emri;
    }

    public function getMbiemri(){
        return $this->mbiemri;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getPassword(){
        return $this->password;
    }

    public function getGjinia(){
        return $this->gjinia;
    }

    


}










?>