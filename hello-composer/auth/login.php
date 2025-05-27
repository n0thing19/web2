<?php
require '../vendor/autoload.php';

use Uph\Hello\Twig;

$twig = Twig::make(__DIR__ . '/templates');

session_start();
$username = $_POST['username'] ?? null;
$password = $_POST['password'] ?? null;


if ($username !== 'user' || $password !== 'pass') {
    echo $twig->render('login.html.twig', ['error' => 'login salah']);
    die();
}

if ($username === 'user' && $password === 'pass') {
    $_SESSION['autenticated'] = true;
    header('Location: index.php');
    die();
}
echo $twig->render('login.html.twig');
