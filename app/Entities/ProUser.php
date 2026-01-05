<?php

class ProUser extends BasicUser {
    public function __construct(
        int $id,
        string $username,
        string $email,
        string $password,
        string $profilePicture,
        DateTime $createdAt,
        ?DateTime $lastLogin,
        int $resetDate
    ) {
        parent::__construct(
            $id,
            $username,
            $email,
            $password,
            $profilePicture,
            null,
            $createdAt,
            $lastLogin,
            $resetDate
        );
    }
}
