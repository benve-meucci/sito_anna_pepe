<?php

readonly class User {
    public function __construct(
        public string $username,
        public int $age
    ) {}
}

$user = new User("alice", 30);

// ERRORE in PHP 8.2 (immutabilità totale):
// $user->age = 31;

echo $user->username . " ha " . $user->age . " anni" . PHP_EOL;