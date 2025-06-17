<?php

require_once 'vendor/autoload.php';

use Uph\Uts\DB;

$id = intval($_GET['id'] ?? 0);
if (!$id) {
    header('Location: list.php', true, 302);
    die('Invalid ID');
}
$db = DB::getDB();
$q = $db->prepare("DELETE FROM buku WHERE id = :id");
$q->execute(['id' => $id]);

header('Location: list.php');
die('Buku = ' . $id . ' telah dihapus');