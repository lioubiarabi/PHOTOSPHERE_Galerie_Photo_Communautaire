<?php
abstract class User
{

    public function __construct(
        protected int $id,
        protected string $username,
        protected string $email,
        protected string $password,
        protected string $profilePicture,
        protected DateTime $createdAt,
        protected ?DateTime $lastLogin,
    ) {}

    public function getId()
    {
        return $this->id;
    }

    public function auth($username, $password){
        if($this->username == $username && $this->password == $password) return true;
        return false;
    }
}