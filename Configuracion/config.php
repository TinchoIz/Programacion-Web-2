<?php
$esLocal = (
    $_SERVER["HTTP_HOST"] === "localhost" ||
    $_SERVER["HTTP_HOST"] === "127.0.0.1"
);

if ($esLocal) {
    define("BASE_URL", "/26-ACN2BV-IZAGUIRRE-MARTIN");
} else {
    define("BASE_URL", "");
}