<?php

class User
{
    public function __construct(
        protected int $id,
        protected string $username,
        protected string $email,
        protected string $password,
        protected string $profilePicture,
        protected ?int $uploadCount,
        protected DateTime $createdAt,
        protected ?DateTime $lastLogin,
        protected ?int $resetDate
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

class BasicUser extends User {}

class ProUser extends User {}

class Moderator extends User
{
    public function __construct(
        private ?string $level,
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

class Photo
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
    ) {}
}

class Comment
{
    public function __construct(
        private int $id,
        private string $content,
        private bool $isArchived,
        private DateTime $createdAt,
        private DateTime $updatedAt,
        private int $photoId,
        private int $userId
    ) {}
}

class Like
{
    public function __construct(
        private int $id,
        private DateTime $createdAt,
        private int $photoId,
        private int $userId
    ) {}
}

class Album
{
    public function __construct(
        private int $id,
        private string $name,
        private bool $public,
        private string $cover,
        private DateTime $publishedAt,
        private DateTime $updatedAt,
        private int $userId
    ) {}
}

class Photo_album
{
    public function __construct(
        public int $id,
        public int $photoId,
        public int $albumId
    ) {}
}

class Tag
{
    public function __construct(
        private int $id,
        private string $slug,
    ) {}
}

class Photo_tag
{
    public function __construct(
        public int $id,
        public int $photoId,
        public int $tagId
    ) {}
}
