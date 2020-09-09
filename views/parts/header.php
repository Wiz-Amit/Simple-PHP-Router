<!doctype html>
<html lang="en">

<head>
    <title>Simple Router</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<?php
function isRoute(array $routes)
{
    foreach ($routes as $route) {
        if ($route === $_SERVER['REQUEST_URI']) return true;
    }

    return false;
}
?>

<body>

    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="/">Simple Rotuer</a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link <?php if (isRoute(["/", ""])) echo "active"; ?>" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if (isRoute(["/about"])) echo "active"; ?>" href="/about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if (isRoute(["/function"])) echo "active"; ?>" href="/function">Function</a>
            </li>
        </ul>
    </nav>

    <main>
        <div class="container py-5">