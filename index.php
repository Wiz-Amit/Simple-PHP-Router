<?php

$request = $_SERVER['REQUEST_URI'];

require __DIR__ . "/routes.php";

foreach ($routes as $route => $path) {
    if ($request == $route) {
        if (is_array($path)) redirect($path[0], $path[1]);
        if (is_callable($path)) $path();
        if (is_string($path)) isUrl($path) ? redirect($path) : openView($baseDirectory, $path);
        exit;
    }
}

// Open 404 if noting matches
http_response_code(404);
openView($baseDirectory, "404.php");
exit;

// Helper functions
function isUrl(string $path)
{
    return (strpos($path, "/") === 0) || (strpos($path, "http://") === 0) || (strpos($path, "https://") === 0);
}

function openView(string $baseDirectory, string $fileName)
{
    require __DIR__ . $baseDirectory . "/" . $fileName;
}

function redirect(string $url, int $redirectionCode = null)
{
    if ($redirectionCode) header("Location: " . $url, true, $redirectionCode);
    else header("Location: " . $url);
}
