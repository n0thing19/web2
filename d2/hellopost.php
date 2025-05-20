<html>
    <head>
        <title>hello</title>
    </head>
    <body>
        <?php
        $nama = $_POST['nama'] ?? "World";
        echo "<h1>Hello World</h1>";

        ?>
        <form action="hellopost.php" method="POST">
            <div>
                <label>Nama:</label>
                <input type="text" name="nama" />
            </div>
            <div><input type="submit" value="Kirim" /></div>
        </form>
    </body>
</html>