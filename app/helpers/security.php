<?php

function isUserAuthenticated(): bool
{
    return isset($_SESSION['user']);
}

function getUserAuthenticated(): ?array
{
    return $_SESSION['user'] ?? null;
}

function userHasRole(string $role): bool
{
    if (!isUserAuthenticated()) {
        return false;
    }

    $user = getUserAuthenticated();

    return in_array($role, $user['roles']);
}
