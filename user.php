
<?php
class User {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function isValidUser($username, $password) {
        $query = "SELECT * FROM users WHERE username = :username";
   
        $query1 = $this->conn->prepare($query);
        $query1->bindParam(':username', $username);
        $query1->execute();

        $user = $query1->fetch(PDO::FETCH_ASSOC);
    
        if (isset($user)) {
            return true;
        }
        return false;
    }
}
