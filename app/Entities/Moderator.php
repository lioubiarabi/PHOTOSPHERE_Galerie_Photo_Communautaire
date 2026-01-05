<?php

class Moderator extends User
{
    public function __construct(
        private ?string $level,
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