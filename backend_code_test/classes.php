<?php

class user
{
    public function __construct(
        private int $id,
        private string $username,
        private string $email,
        private string $password,
        private string $role,
        private string $profilePicture,
        private ?string $level,
        private ?int $uploadCount,
        private DateTime $createdAt,
        private ?DateTime $lastLogin,
        private ?int $resetDate
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
        $this->resetDate = $resetDate;
        $this->lastLogin = $lastLogin;
    }

    public function getId()
    {
        return $this->id;
    }
}

class photo
{
    public function __construct(
        private int $id,
        private string $title,
        private string $description,
        private string $imageLink,
        private int $fileSize,
        private string $dimensions,
        private string $state,
        private int $viewCount,
        private int $userId,
        private DateTime $createdAt,
        private ?DateTime $updatedAt,
        private ?DateTime $publishedAt
    ) {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->imageLink = $imageLink;
        $this->fileSize = $fileSize;
        $this->dimensions = $dimensions;
        $this->state = $state;
        $this->viewCount = $viewCount;
        $this->userId = $userId;
        $this->updatedAt = $updatedAt;
        $this->publishedAt = $publishedAt;
        $this->createdAt = $createdAt;
    }
}

class comment {
    public function __construct(
        private int $id,
        private string $content,
        private bool $isArchived,
        private DateTime $createdAt,
        private DateTime $updatedAt,
        private int $photoId,
        private int $userId
    )
    {
        $this->id = $id;
        $this->content = $content;
        $this->isArchived = $isArchived;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
        $this->photoId = $photoId;
        $this->userId = $userId;
    }
}

class album
{
    public function __construct(
        private int $id,
        private string $name,
        private bool $public,
        private string $cover,
        private DateTime $publishedAt,
        private DateTime $updatedAt,
        private int $userId
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->public = $public;
        $this->cover = $cover;
        $this->publishedAt = $publishedAt;
        $this->updatedAt = $updatedAt;
        $this->userId = $userId;
    }
}

class tag
{
    public function __construct(
        private int $id,
        private string $slug,
    ) {
        $this->id = $id;
        $this->slug = $slug;
    }
}
