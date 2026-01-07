<?php
require 'config.php';
require '../Entities/User.php';
require '../Entities/BasicUser.php';
require '../Entities/ProUser.php';
require '../Entities/Moderator.php';
require '../Entities/Admin.php';
require '../Services/UserFactory.php';
require 'RepositoryInterface.php';



class UserRepository implements RepositoryInterface
{
    private ?User $current_user = null;
    public function __construct(
        private PDO $pdo
    ) {}

    public function login(string $username, string $password): bool
    {
        $foundUser = $this->pdo->query("SELECT * from user where username='$username'")->fetch();
        if ($foundUser) {
            $user = UserFactory::create($foundUser);
            if ($user->auth($username, $password)) {
                $this->current_user = $user;
                return true;
            }
        }
        return false;
    }

    public function isLoggedIn(): bool
    {
        if ($this->current_user) return true;
        return false;
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