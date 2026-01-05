<?php

class UserFactory
{
    public static function create(array $userQuery): User
    {
        switch ($userQuery['role']) {
            case 'proUser':
                return new ProUser(
                    $userQuery['id'],
                    $userQuery['username'],
                    $userQuery['email'],
                    $userQuery['password'],
                    $userQuery['profilePicture'],
                    $userQuery['createdAt'],
                    $userQuery['lastLogin'],
                    $userQuery['subscriptionEnd']
                );
            case 'moderator':
                return new Moderator(
                    $userQuery['level'],
                    $userQuery['id'],
                    $userQuery['username'],
                    $userQuery['email'],
                    $userQuery['password'],
                    $userQuery['profilePicture'],
                    $userQuery['createdAt'],
                    $userQuery['lastLogin']
                );
            case 'admin':
                return new Admin(
                    $userQuery['isSuper'],
                    $userQuery['id'],
                    $userQuery['username'],
                    $userQuery['email'],
                    $userQuery['password'],
                    $userQuery['profilePicture'],
                    $userQuery['createdAt'],
                    $userQuery['lastLogin']
                );
            default:
                return new BasicUser(
                    $userQuery['id'],
                    $userQuery['username'],
                    $userQuery['email'],
                    $userQuery['password'],
                    $userQuery['profilePicture'],
                    $userQuery['uploadCount'],
                    $userQuery['createdAt'],
                    $userQuery['lastLogin'],
                    $userQuery['subscriptionEnd']
                );
        }
    }
}
