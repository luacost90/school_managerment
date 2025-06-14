<?php
    require_once 'models/User.php';
    require_once 'interfaces/AuthRepositoryInterface.php';

    class AuthRepository implements AuthRepositoryInterface{
        private $conn;

        public function __construct(PDO $conn){
            $this->conn = $conn;
        }

        public function findByUsername(string $username): ?User{
            $sql = "SELECT u.id_user, u.username, u.password, r.rol_name FROM users u INNER JOIN roles r ON u.fk_rol = r.id_rol WHERE u.username = :username LIMIT 1";
            $statement = $this->$conn->prepare($sql);
            $statement->bindParam(':username', $username);
            $statement->execute();

            $row = $statement->fetch(PDO::FETCH_ASSOC);

            return $row ? new User($row) : null;
        }
    }
?>