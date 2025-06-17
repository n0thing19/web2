<?php

require_once 'vendor/autoload.php';

use Uph\Uts\DB;
use Uph\Uts\Twig;

$twig = Twig::make('templates');
$id = intval($_GET['id'] ?? NULL);

if (!$id) {
    header('Location: list.php', true, 302);
    die('ID tidak valid.');
}

$db = DB::getDB();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $isbn = $_POST['isbn'] ?? NULL;
    $judul = $_POST['judul'] ?? NULL;
    $kategori = $_POST['kategori'] ?? NULL;
    $halaman = $_POST['halaman'] ?? NULL;
    $pengarang = $_POST['pengarang'] ?? NULL;

    if ($isbn && $judul && $kategori && $halaman && $pengarang) {
        $q = $db->prepare(
            "UPDATE buku SET isbn = :isbn, judul = :judul, kategori = :kategori, halaman = :halaman, pengarang = :pengarang WHERE id = :id"
        );
        $q->execute([
            'id' => $id,
            'isbn' => $isbn,
            'judul' => $judul,
            'kategori' => $kategori,
            'halaman' => $halaman,
            'pengarang' => $pengarang
        ]);
        
        header('Location: list.php', true, 302);
        die();
    }
}

$q = $db->prepare("SELECT * FROM buku WHERE id = :id");
$q->execute(['id' => $id]);
$lstbuku = $q->fetch();

if (!$lstbuku) {
    header('Not Found', true, 404);
    die('Buku tidak ditemukan.');
}

echo $twig->render('form.twig.html', [
    'title' => 'Edit Task',
    'action' => 'edit.php?id=' . $id,
    'isbn' => $lstbuku['isbn'],
    'judul' => $lstbuku['judul'],
    'kategori' => $lstbuku['kategori'],
    'halaman' => $lstbuku['halaman'],
    'pengarang' => $lstbuku['pengarang']

]);
