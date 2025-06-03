<?php

require_once 'vendor/autoload.php';

use Uph\Database\DB;
use Uph\Database\Twig;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'] ?? null;

    if (!$id){
        header('Location: list.php');
        die();
    }
    
    $db = DB::getDB();
    $q = $db->prepare(
        'DELETE FROM todo WHERE id = :id'
    );
    
    $q->execute(['id' => $id]);
    
}


$id = $_GET['id'] ?? null;

if (!$id){
    header('Location: list.php');
    die();
}

$db = DB::getDB();
$q = $db->prepare(
    'SELECT * FROM todo WHERE id = :id'
);

//prepare digunakan untuk mencegak sql injection

$q->execute(['id' => $id]);
$todo = $q->fetch();

if (!$todo){
    header('Not Found', true, 404);
    die();
}

$twig = Twig::make('templates');
echo $twig->render('view.twig.html',
    ['todo' => $todo]);