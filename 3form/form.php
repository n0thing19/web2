<html>
    <head>
        <title>hello</title>
    </head>
    <body>
        <?php
        $nameErr = $genderErr = $alamatErr = "";
        $name = $gender = $alamat = "";
        $formSubmittedSuccessfully = false; 

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $isValid = true; 
            if (empty($_POST['nama'])) {
                $nameErr = "Nama harus diisi";
                $isValid = false;
            } elseif (strlen($_POST['nama']) < 3) {
                $nameErr = "Nama harus lebih dari 3 karakter";
                $isValid = false;
            } else {
                $name = $_POST['nama'];
            }

            if (empty($_POST['jenis_kelamin'])) {
                $genderErr = "Jenis kelamin harus dipilih";
                $isValid = false;
            } else {
                $gender = $_POST['jenis_kelamin'];
            }

            if (empty($_POST['alamat'])) {
                $alamatErr = "Alamat harus diisi";
                $isValid = false;
            } elseif (strlen($_POST['alamat']) < 5) {
                $alamatErr = "Alamat harus lebih dari 5 karakter";
                $isValid = false;
            } else {
                $alamat = $_POST['alamat'];
            }

            if ($isValid) {
                $formSubmittedSuccessfully = true;
            }
        }

        if ($formSubmittedSuccessfully) {
            echo "<h2>Terima kasih, data telah disimpan!</h2>";
            echo "<p><a href='index.php'>Isi formulir lagi</a></p>";
        } else {
        ?>
            <form action="index.php" method="POST">
                <div>
                    <label>Nama:</label>
                    <input type="text" name="nama" value="<?php echo $name; ?>" />
                    <span style="color: red;"><?php echo $nameErr; ?></span>
                    <br>
                    <label>Jenis Kelamin:</label>
                    <input type="radio" name="jenis_kelamin" value="laki-laki" <?php if (isset($gender) && $gender=="laki-laki") echo "checked";?>>Pria
                    <input type="radio" name="jenis_kelamin" value="perempuan" <?php if (isset($gender) && $gender=="perempuan") echo "checked";?>>Wanita
                    <span style="color: red;"><?php echo $genderErr; ?></span>
                    <br>
                    <label>Alamat:</label>
                    <textarea name="alamat"><?php echo $alamat; ?></textarea>
                    <span style="color: red;"><?php echo $alamatErr; ?></span>
                </div>
                <div><input type="submit" value="Kirim" /></div>
            </form>
        <?php
        }
        ?>
    </body>
</html>