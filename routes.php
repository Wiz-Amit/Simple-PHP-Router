<?php

$baseDirectory = "/views";

$routes = [
    "" => "index.php",
    "/" => "index.php",
    "/home" => "/",
    "/about" => "about.php",
    "/about-us" => ["/about", 302],
    "/function" => function () {
        echo "Result from function";
    },
];
