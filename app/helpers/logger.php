<?php

const LOG_LEVEL_CRITICAL = 'CRITICAL';
const LOG_LEVEL_DEBUG = 'DEBUG';


/**
 * @example logMessage('Hello world', LOG_LEVEL_CRITICAL)
 * @see file_put_contents()
 */
function logMessage(string $message, string $level): void
{
    $filename = PROJECT_DIR . '/logs/app.log';
    $line = '[' . date(DATE_RFC3339) . '] ' . "$level: $message" . PHP_EOL;

    file_put_contents($filename, $line, FILE_APPEND);
}

function logCriticalMessage(string $message): void
{
    logMessage($message, LOG_LEVEL_CRITICAL);
}

function logDebugMessage(string $message): void
{
    logMessage($message, LOG_LEVEL_DEBUG);
}
