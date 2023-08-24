<?php
    namespace App\Models;

    class Comment extends BaseModel {
        public $table = 'comment';

        public function getComments() {
            $sql = "SELECT * FROM $this->table";
            $this->setQuery($sql);
            return $this->loadAllRows();
        }

        public function addComment($id, $name, $content) {
            $sql = "INSERT INTO $this->table VALUES (?, ?, ?)";
            $this->setQuery($sql);
            return $this->execute([$id, $name, $content]);
        }

        public function getDetail($id) {
            $sql = "SELECT * FROM $this->table WHERE id = ?";
            // var_dump($sql);die();
            $this->setQuery($sql);
            return $this->loadRow([$id]);
        }

        public function updateComment($id, $name, $content) {
            $sql = "UPDATE $this->table SET name = ?, content = ? WHERE id = ?";
            // var_dump($sql);die();
            $this->setQuery($sql);
            return $this->execute([$name, $content, $id]);
        }

        public function deleteComment($id) {
            $sql = "DELETE FROM $this->table WHERE id = ?";
            $this->setQuery($sql);
            return $this->execute([$id]);
        }
    }
?>