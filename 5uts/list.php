<?php

require_once 'vendor/autoload.php';

use Uph\Uts\DB;
use Uph\Uts\Twig;

$twig = Twig::make('templates');
$db = DB::getDB();

$dataPerPage = 10;
$currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
if ($currentPage < 1) {
    $currentPage = 1;
}
$offset = ($currentPage - 1) * $dataPerPage;

$search = $_GET['search'] ?? '';
$kategori = $_GET['search_kategori'] ?? '';
$sortBy = $_GET['sort_by'] ?? '';
$sortOrder = $_GET['sort_order'] ?? 'asc';

$params = [];
$whereConditions = [];

if (!empty($search)) {
    $whereConditions[] = '(isbn LIKE ? OR judul LIKE ? OR pengarang LIKE ?)';
    $searchTerm = "%{$search}%";
    $params[] = $searchTerm;
    $params[] = $searchTerm;
    $params[] = $searchTerm;
}

if (!empty($kategori)) {
    $whereConditions[] = 'kategori = ?';
    $params[] = $kategori;
}

$sqlCount = 'SELECT COUNT(*) FROM buku';
if (!empty($whereConditions)) {
    $sqlCount .= ' WHERE ' . implode(' AND ', $whereConditions);
}

$qCount = $db->prepare($sqlCount);
$qCount->execute($params);
$totalData = $qCount->fetchColumn();
$totalPages = ceil($totalData / $dataPerPage);

$sql = 'SELECT * FROM buku';
if (!empty($whereConditions)) {
    $sql .= ' WHERE ' . implode(' AND ', $whereConditions);
}

$allowedSortBy = ['judul', 'pengarang'];
$allowedSortOrder = ['asc', 'desc'];
if (in_array($sortBy, $allowedSortBy) && in_array($sortOrder, $allowedSortOrder)) {
    $sql .= " ORDER BY {$sortBy} {$sortOrder}";
}

$sql .= " LIMIT {$offset}, {$dataPerPage}";

$q = $db->prepare($sql);
$q->execute($params);
$books = $q->fetchAll();

echo $twig->render('list.twig.html', [
    'books' => $books,
    'search' => $search,
    'kategori' => $kategori,
    'sort_by' => $sortBy,
    'sort_order' => $sortOrder,
    'books_count' => count($books),
    'total_data' => $totalData,
    'current_page' => $currentPage,
    'total_pages' => $totalPages,
]);