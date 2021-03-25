<?php
    class control extends users
    {
        public function register($id, $username, $password)
        {
            $this->setUserAcc($id, $username, $password);
        }

        public function register2($id, $firstname, $lastname, $nickname)
        {
            $this->setUserId($id, $firstname, $lastname, $nickname);
        }
    }
?>