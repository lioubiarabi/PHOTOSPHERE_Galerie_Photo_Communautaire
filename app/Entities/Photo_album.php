<?php

class Photo_album
{
    public function __construct(
        public int $id,
        public int $photoId,
        public int $albumId
    ) {}
}