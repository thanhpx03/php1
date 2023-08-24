<?php
    namespace App\Models;

    class User extends BaseModel {
        public $table = 'user';

        public function getUsers() {
            $sql = "SELECT * FROM $this->table";
            $this->setQuery($sql);
            return $this->loadAllRows();
        }

        public function addUser($id, $name, $password, $address, $phone) {
            $sql = "INSERT INTO $this->table VALUES (?, ?, ?, ?, ?)";
            $this->setQuery($sql);
            return $this->execute([$id, $name, $password, $address, $phone]);
        }

        public function getDetail($id) {
            $sql = "SELECT * FROM $this->table WHERE id = ?";
            $this->setQuery($sql);
            return $this->loadRow([$id]);
        }

        public function updateUser($id, $name, $password, $address, $phone) {
            $sql = "UPDATE $this->table SET name = ?, password = ?, address = ?, phone = ? WHERE id = ?";
            $this->setQuery($sql);
            return $this->execute([$name, $password, $address, $phone,$id]);
        }

        public function delete($id) {
            $sql = "DELETE FROM $this->table WHERE id = ?";
            $this->setQuery($sql);
            return $this->execute([$id]);
        }
    }
?>