<?php
    require_once 'interfaces/AuthRepositoryInterface.php';

    class AuthService{
        private AuthRepositoryInterface $repository;

        public function __construct(AuthRepositoryInterface $repository){
            $this->repository = $repository;
        }

        public function login(string $username, string $password) : ? User{
            $user = $this->repository->findByUsername($username);

            if($user && password_verify($password, $user->password)){
                return $user;
            }

            return null;
        }

    }
?>