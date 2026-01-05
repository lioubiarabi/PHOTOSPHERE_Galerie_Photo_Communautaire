<?php

interface RepositoryInterface {
    public function login(string $username, string $password):bool;
    public function isLoggedIn():bool;
    public function logout():bool;
    public function addUser(User $user):bool;
    public function updateUser(User $user):bool;
    public function removeUser(int $index):bool;
}