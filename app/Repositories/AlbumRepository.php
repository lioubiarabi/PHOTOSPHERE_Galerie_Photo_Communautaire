<?php

class AlbumRepository
{

    public function __construct(private PDO $pdo) {}

    public function createAlbum(int $userId, string $title, string $cover, bool $isPublic): int
    {
        $stmt = $this->pdo->prepare("SELECT * from album where name=? and userId=?");
        $stmt->execute([$title, $userId]);
        if ($stmt->fetch())
            return 0;

        $this->pdo->prepare("INSERT into album (name, public, cover, publishedAt, userId) values (?, ?, ?, NOW(), ?)")->execute([$title, $isPublic, $cover, $userId]);


        return $this->pdo->lastInsertId();
    }

    public function addPhotoToAlbum(int $albumId, int $photoId): bool
    {
            $stmt = $this->pdo->prepare("SELECT count(*) as total FROM photo_album where albumId=?");
            $stmt->execute([$albumId]);
            if ($stmt->fetch()['total'] >= 100) return false;

            $stmt2 = $this->pdo->prepare("SELECT * FROM photo_album where albumId=? and photoId=?");
            $stmt2->execute([$albumId, $photoId]);
            if ($stmt2->fetch()) return false;

            $stmt3 = $this->pdo->prepare("INSERT into photo_album values(?,?)");
            $stmt3->execute([$albumId, $photoId]);

            // update the album
            $this->updateAlbum($albumId);
            return true;
    }

    public function updateAlbum($albumId)
    {
        $stmt = $this->pdo->prepare("UPDATE album set updatedAt=NOW() WHERE id=?");
        $stmt->execute([$albumId]);
    }

    public function removePhotoFromAlbum(int $albumId, int $photoId, int $userId): bool {
        
    }
}
