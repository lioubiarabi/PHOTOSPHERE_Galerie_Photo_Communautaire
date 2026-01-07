<?php

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