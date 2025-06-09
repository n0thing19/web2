<?php
require_once 'vendor/autoload.php';

use Uph\Database\DB;
use Uph\Database\Twig;
$twig = Twig::make('templates');
$db = DB::getDB();
$sql = 'SELECT * FROM todo';
//query builder
$where = [];
$params = [];

if ($_GET['search_task'] ?? null) {
    $where[] = "task LIKE :search_task";
    $params['search_task'] = '%' . $_GET['search_task'] . '%';
}

if ($_GET['search_status'] ?? null) {
    $where[] = "status = :search_status";
    $params['search_status'] = $_GET['search_status'];

}


if (count($where) > 0) {
    $sql .= ' WHERE ' . implode(' AND ', $where);
}

die($sql);

$q = $db->prepare($sql);
$q->execute($params);
$rows = $q->fetchAll();
echo $twig->render(
    'list.twig.html',
    [
        'rows' => $rows,
        'search_task' => $_GET['search_task'] ?? null,
        'search_status' => $_GET['search_status'] ?? null,
        'rows_count' => count($rows)
    ]
);