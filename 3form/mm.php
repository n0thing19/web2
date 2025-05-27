<html>
<head>
    <title>Form Validasi</title>
    <style>
        .error {
            color: red;
            font-size: 0.9em;
        }
    </style>
</head>
<body>

<?php
$nama = '';
$jeniskelamin = '';
$alamat = '';

$error_nama = '';
$error_jeniskelamin = '';
$error_alamat = '';

$form_valid = true;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty(trim($_POST['nama']))) {
        $error_nama = "Nama harus diisi";
        $form_valid = false;
    } else {
        $nama = trim($_POST['nama']);
        if (strlen($nama) < 3) {
            $error_nama = "Nama harus lebih dari 3 karakter";
            $form_valid = false;
        }
    }

    if (empty($_POST['jeniskelamin'])) {
        $error_jeniskelamin = "Jenis kelamin harus diisi";
        $form_valid = false;
    } else {
        $jeniskelamin = $_POST['jeniskelamin'];
    }

    if (empty(trim($_POST['alamat']))) {
        $error_alamat = "Alamat harus diisi";
        $form_valid = false;
    } else {
        $alamat = trim($_POST['alamat']);
        if (strlen($alamat) < 5) {
            $error_alamat = "Alamat harus lebih dari 5 karakter";
            $form_valid = false;
        }
    }

    if ($form_valid) {
        echo "<h2>Data Berhasil Disimpan:</h2>";
        echo "<p>Nama: " . htmlspecialchars($nama) . "</p>";
        echo "<p>Jenis Kelamin: " . htmlspecialchars($jeniskelamin) . "</p>";
        echo "<p>Alamat: " . htmlspecialchars($alamat) . "</p>";
        echo "<hr>";
    }
}
?>

<form action="" method="POST">
    <div>
        <label>Nama: </label>
        <input type="text" name="nama" value="<?php echo htmlspecialchars($nama); ?>" /><br>
        <span class="error"><?php echo $error_nama; ?></span>
        <br>

        <label>Jenis kelamin: </label>
        <input type="radio" id="jeniskelamin_pria" name="jeniskelamin" value="Pria" <?php if ($jeniskelamin == 'Pria') echo 'checked'; ?> />
        <label for="jeniskelamin_pria">Pria</label>

        <input type="radio" id="jeniskelamin_wanita" name="jeniskelamin" value="Wanita" <?php if ($jeniskelamin == 'Wanita') echo 'checked'; ?> />
        <label for="jeniskelamin_wanita">Wanita</label><br>
        <span class="error"><?php echo $error_jeniskelamin; ?></span>
        <br>

        <label>Alamat: </label>
        <textarea name="alamat"><?php echo htmlspecialchars($alamat); ?></textarea><br>
        <span class="error"><?php echo $error_alamat; ?></span>
        <br>
    </div>
    <div><input type="submit" value="Kirim"></div>
</form>

</body>
</html>