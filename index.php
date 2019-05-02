<?php

$kintamasis = date('s') % 2;



?>









<html>
<head>
    <title>Kintamieji</title>
    <style>
        .kvadratas {
            background-color: blue;
            height: 50px;
            width: 50px;
        }


        .rutulys {
            background-color: blue;
            height: 50px;
            width: 50px;
            border-radius: 50px;
        }

        .debesuotalietus {

        background-color: blue;
        height: 50px;
        width: 50px;
        }

    </style>

<body>
    <?php if($kintamasis == 0): ?>
    <div class="kvadratas"></div>
    <?php else: ?>
        <div class="rutulys"></div>
    <?php endif?>
</body>
</html>