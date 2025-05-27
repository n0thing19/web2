<html>
    <head>
        <title>hello</title>
    </head>
    <body>
        <?php
        $nama = $_GET['nama'] ?? null;
        if ($nama){
            echo "<h1>Hello $nama</h1>";
        }
        else{
            echo "<h1>Hello World</h1>";
        }
        ?>
        <form action="helloget.php" method="GET">
            <div>
                <label>Nama:</label>
                <input type="text" name="nama" />
            </div>
            <div><input type="submit" value="Kirim" /></div>
        </form>
    </body>
</html>