<?php

function run(): void
{
    unset($_SESSION['user']);

    header('Location: ?page=homepage');
    die();
}
