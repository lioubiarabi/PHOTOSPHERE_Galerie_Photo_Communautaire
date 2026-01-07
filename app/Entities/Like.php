<?php

class Like
{
    public function __construct(
        private int $id,
        private DateTime $createdAt,
        private int $photoId,
        private int $userId
    ) {}
}