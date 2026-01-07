<?php
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
