<?php

require_once 'vendor/autoload.php';

use Uph\Uts\DB;
use Uph\Uts\Twig;

$twig = Twig::make('templates');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $isbn = $_POST['isbn'] ?? NULL;
    $judul = $_POST['judul'] ?? NULL;
    $kategori = $_POST['kategori'] ?? NULL;
    $halaman = $_POST['halaman'] ?? NULL;
    $pengarang = $_POST['pengarang'] ?? NULL;

    if ($isbn && $judul && $kategori && $halaman && $pengarang) {
        $db = DB::getDB();
        $q = $db->prepare(
            "INSERT INTO buku (isbn, judul, kategori, halaman, pengarang) 
            VALUES (:isbn, :judul, :kategori, :halaman, :pengarang)"
        );
        $q->execute([
            'isbn' => $isbn,
            'judul' => $judul,
            'kategori' => $kategori,
            'halaman' => $halaman,
            'pengarang' => $pengarang
        ]);
    }
    
    header('Location: list.php', true, 302);
    die();
}

echo $twig->render('form.twig.html', [
    'title' => 'Tambahkan Buku ',
    'action' => 'create.php',
]);
