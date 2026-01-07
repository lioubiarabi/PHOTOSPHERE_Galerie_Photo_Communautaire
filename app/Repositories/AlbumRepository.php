<?php

class AlbumRepository
{

    public function __construct(private PDO $pdo) {}

    public function createAlbum(int $userId, string $title, string $description, string $cover, bool $isPublic): int {
        try {
            $this->pdo->beginTransaction();

            if($this->pdo->prepare("SELECT * from album where title='$title' and userId='$userId'")->fetch())
                throw new PDOException("You already created an album with the title: $title");

            $this->pdo->prepare("INSERT into album (name, public, cover, publishedAt, userId) values (?, ?, ?, NOW(), ?)")->execute([$title, $description, $cover, $isPublic]);

            $this->pdo->commit();

            return $this->pdo->lastInsertId();

        } catch (PDOException $e) {
            echo "Error creating an album: " . $e->getMessage();
        }
    }
}
