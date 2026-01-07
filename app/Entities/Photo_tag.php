<?php

class Photo_tag
{
    public function __construct(
        public int $id,
        public int $photoId,
        public int $tagId
    ) {}
}
