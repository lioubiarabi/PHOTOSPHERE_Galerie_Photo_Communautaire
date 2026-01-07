<?php

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
