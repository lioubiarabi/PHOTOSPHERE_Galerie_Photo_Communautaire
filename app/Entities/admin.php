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
        ?int $uploadCount,
        DateTime $createdAt,
        ?DateTime $lastLogin,
        ?int $resetDate
    ) {
        parent::__construct(
            $id,
            $username,
            $email,
            $password,
            $profilePicture,
            $uploadCount,
            $createdAt,
            $lastLogin,
            $resetDate
        );
    }
}