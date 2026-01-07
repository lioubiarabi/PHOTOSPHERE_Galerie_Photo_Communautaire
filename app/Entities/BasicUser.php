<?php

class BasicUser extends User
{
    public function __construct(
        int $id,
        string $username,
        string $email,
        string $password,
        string $profilePicture,
        ?int $uploadCount,
        DateTime $createdAt,
        ?DateTime $lastLogin,
        DateTime $resetDate
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
