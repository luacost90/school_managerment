<?php
    class User{
        
        public string $id;
        public string $username;
        public string $password;
        public string $rol;

        public function __construct(array $data = []){
            $this->id = $this->data['id_user'] ?? '';
            $this->username = $this->data['username'] ?? '';
            $this->password = $this->data['password'] ?? '';
            $this->rol = $this->data['rol_name'];
        }

    }


?>