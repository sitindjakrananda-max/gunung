<?php
class Ticket {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getTickets() {
        $query = "SELECT * FROM ticket";
        $result = $this->conn->query($query);
        return $result;
    }
}
?>
