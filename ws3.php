<?php include "connect.php" ?>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        $stmt = $pdo->prepare("SELECT * FROM member");
        $stmt->execute();

        while ($row = $stmt->fetch()){ ?>
            ชื่อสมาชิก: <?=$row ["name"]?><br>
            ที่อยู่: <?=$row ["address"]?><br>
            อีเมล์: <?=$row ["email"]?><br>
         <div>
            <img src='img/<?=$row['username']?>.jpg' width='100'><br>
        </div>
        <hr>
        <?php 
        }
        ?>
    </body>
</html>
        