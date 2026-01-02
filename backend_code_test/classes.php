<?php

class user
{
    private DateTime $createdAt;
    private ?DateTime $lastLogin;
    private ?int $resetDate;
    public function __construct(
        private int $id,
        private string $username,
        private string $email,
        private string $password,
        private string $role,
        private string $profilePicture,
        private ?string $level,
        private ?int $uploadCount
    ) {
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
        $this->profilePicture = $profilePicture;
        $this->createdAt = new DateTime();
        $this->level = $level;
        $this->uploadCount = $uploadCount;
        $this->resetDate = null;
        $this->lastLogin = null;
    }

    public function getId()
    {
        return $this->id;
    }
}

class photo {
    
}
