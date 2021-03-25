<?php
    class Users extends dbh
    {
        public function getUser($id)
        {
            $sql = "SELECT * FROM identity WHERE id = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$id]);

            $result = $stmt->fetchAll();
            return $result;
        }

        public function getAll($table_name)
        {
            $sql = 'SELECT * FROM '. $table_name . ' ORDER BY id ASC';
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([]);

            $result = $stmt->fetchAll();
            return $result;
        }

        public function setUserAcc($id, $username, $password)
        {
            $sql = 'INSERT INTO id_security (id, username, password) VALUES (' . $id . ' , '. $username . ' , ' . $password . ' )';
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$id, $username, $password]);

            $result = $stmt->fetchAll();
            return $result;
        }

        public function setUserId($id, $firstname, $lastname, $nickname)
        {
            $sql = 'INSERT INTO identity(id, first_name, last_name, nickname) VALUES (' . $id . ' , '. $firstname . ' , ' . $lastname . ' , '. $nickname . ')';
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$id, $firstname, $lastname, $nickname]);

            $result = $stmt->fetchAll();
            return $result;
        }
    }
?>