<?php

class PhotoRepository
{

    public function __construct(private PDO $pdo) {}

    public function saveWithTags(array $photoInfo, array $tags)
    {
        try {

            $this->pdo->beginTransaction();

            if (count($tags) <= 0 || count($tags) > 10) throw new PDOException("Tags must be between 0 and 10");

            // add the image to the table
            $this->pdo->prepare("INSERT INTO photo (title, description, imageLink, fileSize, dimensions, state, publishedAt, userId) VALUES (?, ?, ?, ?, ?, ?, NOW(), ?);")->execute([$photoInfo['title'], $photoInfo['description'], $photoInfo['imageLink'], $photoInfo['fileSize'], $photoInfo['dimensions'], $photoInfo['state'], $photoInfo['userId']]);
            $photoId = $this->pdo->lastInsertId();
            // add all the tags that not exist in tag table
            foreach ($tags as $tag) {
                $foundTag = $this->pdo->query("SELECT * FROM tag where name ='$tag'")->fetch();
                if (!$foundTag) {
                    $this->pdo->prepare("INSERT INTO tag (slug, name) VALUES (?, ?);")->execute([$tag, $tag]);
                    $foundTag = $this->pdo->query("SELECT * FROM tag where name ='$tag'")->fetch();
                }

                // lier la photo avec tag
                $this->pdo->prepare("INSERT INTO photo_tag (tagId, photoId) VALUES (?, ?);")->execute([$foundTag['id'], $photoId]);
            }

            $this->pdo->commit();
            echo "Done insering photo with its tags";
        } catch (PDOException $msg) {
            $this->pdo->rollBack();
            echo "PDO transaction error:: " . $msg->getMessage();
        }
    }
}
