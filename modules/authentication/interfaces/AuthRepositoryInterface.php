<?php
    interface AuthRepositoryInterface{
        public function findByUsername(string $username): ?User;
    }
?>