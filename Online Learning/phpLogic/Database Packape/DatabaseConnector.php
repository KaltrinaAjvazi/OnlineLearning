


<?php
 class DatabaseConnector {
            
            private static  $databaseConnector = null;
            private $connection;
            private $dbhost = "localhost";
            private $dbuser = "root";
            private $dbpass = ""; 
            private $dbName = "onlinelearning";

            //mos e lejo te incializohet 
            private function __construct(){
                $this->connection = new mysqli($this->dbhost,$this->dbuser,$this->dbpass,$this->dbName); 

            }


            /**
             *
             * Kthen instancen e krijuar te klases DatabaseConnector
             *
             * @param    asnje
             * @return   $databaseConnector 
             *
             */
            public static function merrInstancen() : DatabaseConnector{

                if(self::$databaseConnector == null){
                    self::$databaseConnector = new DatabaseConnector();
                }

                return self::$databaseConnector;
            }

            /**
             *
             * Kthen connection e sapo incializuar ne konstruktorin privat.
             *
             * @param    asnje
             * @return   $connection 
             *
             */
            public  function merrConnection(){

                return $this->connection;
            }

            

        }





?>