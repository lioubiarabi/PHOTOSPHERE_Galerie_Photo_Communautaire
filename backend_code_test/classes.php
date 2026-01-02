<?php

class user {
    public function __construct(
        private int $id,
        private string $username,
        private string $email,
        private string $password,
        private string $role,
        private string $profilePicture,
        private DateTime $cratedAt,
        private ?string $level,
        private ?int $uploadCount,
        private ?int $resetDate,
        private ?DateTime $lastrLogin
    ) {
        
    }
}
?>