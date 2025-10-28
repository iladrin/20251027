<?php

function getUsers(): array
{
    return require MODELS_DIR . '/users.php';
}
