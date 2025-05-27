<?php
if (isset($_COOKIE['username'])){
?>
    <html>
        <body>
            <h1>Hello <?php echo $_COOKIE['username']; ?></h1>
        </body>
    </html>
<?php
}
else if (isset($_POST['username'])){
    setcookie('nama', $_POST['username']);
    header('Location: /cookies.php', false, 302);
} else{
?>
    <html>
        <body>
            <form method="post">
                Username: <input type="text" name="username"><br>
                <input type="submit" value="Submit">
        </body>
    </html>
<?php
}
?>