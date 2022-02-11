<?php
        

        interface UserInterface{


            public function insertNeDatabaze(User $user);

            public function fshijNeBazeID($id);

            public function findByUsernameAndPassword($username,$password);
        }


?>
