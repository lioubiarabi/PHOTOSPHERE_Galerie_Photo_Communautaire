<?php

class Admin extends User
{
    public function __construct(
        private bool $isSuper,
        int $id,
        string $username,
        string $email,
        string $password,
        string $profilePicture,
        DateTime $createdAt,
        ?DateTime $lastLogin
    ) {
        parent::__construct(
            $id,
            $username,
            $email,
            $password,
            $profilePicture,
            $createdAt,
            $lastLogin
        );
    }
}