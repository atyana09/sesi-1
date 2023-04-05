<?php
    $usr = "";
    $ps = "";
    if (isset($_GET["txUSER"])) {
        $usr = $_GET["txUSER"];
        $ps = $_GET["txPASSKY"];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From Method GET</title>
</head>
<body>
    <form method="get" action="latihan01.php">
        <div>
            User Name 
            <input type="text" name="txUSER" required>
        </div>

        <div>
            Password
            <input type="password" name="txPASSKY" required>
        </div>

        <div>
            <button>Login</button>
        </div>
    </form>    

    <div>
        Isi dari from:<br>
            1. User Name:<?=$usr?><br>
            2. Password:<?=$ps?>
    </div>
</body>
</html>