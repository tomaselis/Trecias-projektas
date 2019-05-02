<?php

$sauleta = rand(0,1);
$debesuota = rand(0,1);
$debesuotalietus = rand(0,1);


if($sauleta < 1) {
    print 'Sauleta';
}else {
    print 'Debesuota su lietum';
}


?>









<html>
<head>
    <title>Kintamieji</title>
    <style>
        .sauleta {
            background-color: yellow;
            height: 100px;
            width: 100px;
        }


        .debesuota {
            background-color: blue;
            height: 100px;
            width: 100px;
        }

        .debesuotalietus {

        background-color: green;
        height: 100px;
        width: 100px;
        }

    </style>

<body>
    <?php if($sauleta < 1): ?>
    <div class="sauleta"></div>
    <?php elseif($debesuotalietus > 0 && $sauleta > 0): ?>
        <div class="debesuotalietus"></div>
    <?php else: ?>
    <div class="debesuota"></div>
    <?php endif?>
</body>
</html>