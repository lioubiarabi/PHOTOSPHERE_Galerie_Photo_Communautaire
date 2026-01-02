<?php

class user {
    public function __construct(
        private int $id,
        private string $username,
        private string $email,
        private string $password,
        private string $role,
        private string $profilePicture,
        private DateTime $createdAt,
        private ?string $level,
        private ?int $uploadCount,
        private ?int $resetDate,
        private ?DateTime $lastrLogin
    ) {
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
        $this->profilePicture = $profilePicture;
        $this->createdAt = $createdAt;
        $this->level = $level;
        $this->uploadCount = $uploadCount;
        $this->resetDate = $resetDate;
        $this->lastrLogin = $lastrLogin;
    }

    
}
?>