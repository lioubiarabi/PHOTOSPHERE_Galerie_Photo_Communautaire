<?php
require 'config.php';
require '../Entities/User.php';
require '../Entities/BasicUser.php';
require '../Entities/ProUser.php';
require '../Entities/Moderator.php';
require '../Entities/Admin.php';


class UserRepository implements RepositoryInterface {
    private ?User $current_user = null;
    public function __construct(
        private PDO $pdo
    ){}
    
    public function login(string $username, string $password): bool
    {
        return true;
    }

    public function isLoggedIn(): bool
    {
        return true;
    }

    public function logout(): bool
    {
        $this->current_user = null;
        return true;
    }
    
    public function addUser(User $user): bool
    {
        return true;
    }

    public function updateUser(User $user): bool
    {
        return true;
    }

    public function removeUser(int $index): bool
    {
        return true;
    }

};

$db = new UserRepository($pdo);