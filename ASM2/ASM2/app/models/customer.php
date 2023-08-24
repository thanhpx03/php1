<?php
    namespace App\Models;

    class Customer extends BaseModel {
        protected $table = 'customer';

        public function getCustomers() {
            $sql = "SELECT * FROM $this->table";
            $this->setQuery($sql);
            return $this->loadAllRows();
        }

        public function addCustomer($id, $name, $address, $email) {
            $sql = "INSERT INTO $this->table VALUES (?, ?, ?, ?)";
            $this->setQuery($sql);
            return $this->execute([$id, $name, $address, $email]);
        }

        public function getDetail($id) {
            $sql = "SELECT * FROM $this->table WHERE id = ?";
            $this->setQuery($sql);
            return $this->loadRow([$id]);
        }

        public function updateCustomer($id, $name, $address, $email) {
            $sql = "UPDATE $this->table SET name = ?, address = ?, email = ? WHERE id = ?";
            $this->setQuery($sql);
            return $this->execute([$name, $address, $email, $id]);
        }

        public function delete($id) {
            $sql = "DELETE FROM $this->table WHERE id = ?";
            $this->setQuery($sql);
            return $this->execute([$id]);
        }
    }
?>