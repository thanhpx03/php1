<?php
    namespace App\Models;

    class Category extends BaseModel {
        public $table = 'category';

        public function getCategories() {
            $sql = "SELECT * FROM $this->table";
            $this->setQuery($sql);
            return $this->loadAllRows();
        }

        public function addCategory($id, $name, $amount) {
            $sql = "INSERT INTO $this->table VALUES (?, ?, ?)";
            $this->setQuery($sql);
            return $this->execute([$id, $name, $amount]);
        }

        public function getDetail($id) {
            $sql = "SELECT * FROM $this->table WHERE id = ?";
            $this->setQuery($sql);
            return $this->loadRow([$id]);
        }

        public function updateCategory($id, $name, $amount) {
            $sql = "UPDATE $this->table SET name = ?, amount = ? WHERE id = ?";
            $this->setQuery($sql);
            return $this->execute([$name, $amount, $id]);
        }

        public function delete($id) {
            $sql = "DELETE FROM $this->table WHERE id = ?";
            $this->setQuery($sql);
            return $this->execute([$id]);
        }
    }
?>